<?php
	$chara = \App\Character::where('id', $inv->id)->first();
?>
<div class="editInv" id=<?php echo $inv->id; ?> >
	<div class="flexcont between" style="
		border:1px solid #aaa;
		background-color: #ddd;
		margin: 0;padding: 4px;
	">
		<div colspan="1" class="backBtn" id="backToChar" style="width:10vw">⤺</div>
		<div>
			<h1>Inventaire de <?php echo $chara->name; ?></h1>
		</div>
	</div>
	<div style="
		border:1px solid #aaa;
		background-color: #ddd;
		margin: 0; padding: 4px;
	">
		<div class="flexcont wrap around">
			<?php
			if (!function_exists('equipItemDisplay')) {
				function equipItemDisplay($itmID) {
				  $itm = \App\Item::where('id', $itmID)->first();
				  if ( isset($itm) ) {
				    $itmbox = '
				      <span class="invitm" style="max-width: 32px; max-height: 32px;">
				        <img src=".' . $itm->icon . '" />
				      </span>';
				    return $itmbox;
				  }
				}
			}
			try {
				$invitms = json_decode($inv->content, true);
				foreach ($invitms["Items"] as $invitm) {
				  foreach ($invitm as $key => $val) {
				    if ($key == "id") {
				      echo '<span class="invItmDisplay" id="' . $val . '" style="position: relative;"><div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">'
				             . equipItemDisplay($val) . '</div>';
				    }
				    if ($key == "amt") {
				      echo '<div class="amtTooltip">'
				             . $val . '</div><div class="dltItm">x</div></span>';
				    }
				  }
				}
			} catch (ErrorException $e) {
				// do nothing
			}
			?>
			<span id="additm" id="' . $val . '" style="width:64px;position: relative;cursor:pointer;">
				<div class="flexbox itemFrame" style="margin:4px;background:rgba(132,158,107,0.75);">
					<span class="invitm">
			        	<span style="font-weight:bold;font-size:24px;color:olivedrab;">+</span>
			      	</span>
				</div>
			</span>
		</div>
	</div>
</div>
<script>
	/* add item */
	$('#additm').off('click').click(function(){
		$('#content').append('\
			<div id="addInvItm" style="position:fixed;width:75vw;height:90vh;top:50%;left:50%;transform:translate(-50%,-50%);background:#ccc;border:1px solid #888;border-radius:3px;display: flex;flex-direction:column;align-items: center;justify-content: center;"><span class="closeBtn">✅</span><input id="nameSearch" type="text" style="display:block;padding:0;margin:0;font-size:150%;" placeholder="Entrez un nom d\'objet" /><br />\
				<div id="selectedItm" style="font-size:24px;"><span id="newItmID">-</span> <span id="newItmIcon"></span> <span id="newItmAmt"><input type="number" style="width:6ch;" value="1" /></span> <span id="newItmCanSell"><input type="checkbox" id="canSell" style="display:inline;visibility:visible;" title="Objet vendable" checked /></span></div>\
				<div id="objSearch" style="overflow-y:auto;max-height:90%;"></div>\
			</div>\
		');
		$('.closeBtn').off('click').click(function(){
			var id = $('div.editInv').attr('id'),
				itm = $('#selectedItm #newItmID').html(),
				amt = $('#selectedItm #newItmAmt input[type="number"]').val();
			if($('#selectedItm #newItmCanSell input[type="checkbox"]').is(":checked")) {
			    var sell = "y";
			} else {
			    var sell = "n";
			}
			if (id != "-") {
				var newitmDetails = {'id': id, 'itm': itm, 'amt': amt, 'sell': sell};
				$.post( '{{ route("addInvItm") }}', newitmDetails)
					.done(function(data){
						displayAdminAction('<font color="olivedrab"><strong>Objet ajouté :)</strong></font>');
						$('div.flexcont.wrap.around').append('\
							<span class="invItmDisplay" id="103" style="position: relative;">\
								<div class="flexbox itemFrame" style="margin:4px;background:rgba(70,40,25,0.75);">\
									<div class="amtTooltip">'+amt+'</div></span>\
									<span class="invitm" style="max-width: 32px; max-height: 32px;">\
										<img src=".'+data+'" />\
									</span>\
								</div>\
							</span>\
					    ');
						$('#addInvItm').remove();
					})
					.fail(function(){
					  displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
					  $('#addInvItm').remove();
				});
			}
			else {
				displayAdminAction('<font color="indianred"><strong>Demande invalide!</strong></font>');
				$('#addInvItm').remove();
			}
		});
		$('#nameSearch').keyup(delay(function (e) {
	      var searchTerm = $(this).val();
	      $('#objSearch').empty();
	      let searchName = {'name': searchTerm};
	      $.post( '{{ route("listItmByName") }}', searchName)
	        .done(function(data){
				$('#objSearch').html(data);
				$('#objSearch tr *').off('click').click(function(){
					var itmID = $(this).parent('tr').attr('id');
					$('#selectedItm > #newItmID').html(itmID);
					var newitmicon = $(this).closest('tr').find('td.icon span.icon').clone();
					$('#selectedItm > #newItmIcon').html(newitmicon);
				});
	        })
	        .fail(function(){
	          displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
	      });
	    }, 500));
	});
	/* delete item */
	$('.dltItm').off('click').click(function(){
		var itmID = $(this).parent('span.invItmDisplay').attr('id'),
			chaID = $(this).closest('#mainAdminContentsView').find('div.editInv').attr('id'),
			parent = $(this).parent('span.invItmDisplay');
		let delItmData = {'id': chaID, 'itm': itmID};
		  	$.post( '{{ route("deleteInvItm") }}', delItmData )
			  	.done(function(){
			  		displayAdminAction('<strong>Inventaire mis à jour!</strong>');
			  		parent.remove();
			  	})
			  	.fail(function(){
			  		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
			});
	});
	/* -- Back button --- */
	$('#backToChar').click( function () {
  		$.ajax({
		    type: 'GET', 
		    url : 'm_char', 
		    success : function (data) {
		        $('#content').html(data);
		    }
		});
	});
	/* -- Change item --- */
	$('select.changeItem').change( function () {
  		var id = $('.editEquip').attr('id'),
  			newItmType = $(this).attr('id'),
  			newItmId = $(this).val();
  		var r = confirm("Remplacer l'objet pour cette cellule d'inventaire??");
		if (r == true) {
			let newItmData = {'id': id, 'slot': newItmType, 'itmId': newItmId};
		  	$.post( '{{ route("replaceEquip") }}', newItmData )
			  	.done(function(){
			  		displayAdminAction('<strong>Équipement mis à jour!</strong>');
			  	})
			  	.fail(function(){
			  		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
			});
		} else {
		  txt = "Action annulée";
		} 
	});
	// enable / disable access
	$('input#switch').off('click').click(function() {
		if ($(this).data('value') == 'y') {
			$(this).data('value', 'n');
		}
		else if ($(this).data('value') == 'n') {
			$(this).data('value', 'y');
		}
		let selectedEquipID = $('.editEquip').attr('id'),
			toggle = $(this).data('value'),
			sendNewToggle = {'id': selectedEquipID, 'toggle': toggle};
		$.post( '{{ route("toggleEquip") }}', sendNewToggle )
	      	.done(function(){
	      		displayAdminAction('<strong>Accès à l\'équipement mis à jour!</strong>');
	      	})
	      	.fail(function(){
	      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>');
	    });
	});
</script>