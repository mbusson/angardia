<?php
        $characters = \App\Character::where([['sidebar', '1'], ['stats_set', '1']])->orderBy('name')->get();
?>
<span id="charalist">
	<div class="tableWrapper">
	  <table class="charas" style="table-layout:fixed;width:100%;">
	    <tbody>
	      <?php
	      foreach ($characters as $character) {
	          $user = \App\User::where('id', $character->owner)->first();
	          if ($character->gender == "m") {
	          	$gender = "♂";
	          } else if ($character->gender == "f") {
	          	$gender = "♀";
	          }
	          if ($character->sidebar == 1 && $character->stats_set == 1 && $character->owner != 0) {
	          	$active = '<div style="display:inline-block;height:8px;width:8px;border-radius:50%;background-color:OliveDrab;" title="Validé"></div> ';
	          } else {
	          	$active = '<div style="display:inline-block;height:8px;width:8px;border-radius:50%;background-color:IndianRed;" title="Pas encore validé"></div> ';
	          }
	          $traits = array();
	          $traitsDisplay = '';
	          $traits[] = $character->class_trait_1;
	          for ($x = 1; $x <= 5; $x++)
				{
				    $entry = 'race_trait_' . $x;
				    $traits[] = $character->$entry;
				}
			  for ($x = 0; $x <= 9; $x++)
				{
				    $entry = 'main_trait_' . $x;
				    $traits[] = $character->$entry;
				}
			  for ($x = 0; $x <= 9; $x++)
				{
				    $entry = 'sec_trait_' . $x;
				    $traits[] = $character->$entry;
				}
			  foreach ($traits as $trait) {
			  	if ($trait != NULL) {
			  		$traitsDisplay = $traitsDisplay . '<span class="tt" style="border:1px solid #ccc;background-color: #eee;border-radius: 0.5em;padding: 1px;margin: 1px;line-height: 195%;white-space:nowrap;" id="' . $trait . '"></span> ';
			  	}
			  }
			  $statistics = array();
	          $statisticsDisplay = '';
	          $statistics['forc'] = $character->forc;
	          $statistics['dext'] = $character->dext;
	          $statistics['inte'] = $character->inte;
	          $statistics['endu'] = $character->endu;
	          $statistics['defe'] = $character->defe;
	          $statistics['vite'] = $character->vite;
	          $statistics['perc'] = $character->perc;
	          $statistics['chan'] = $character->chan;
	          $statistics['chrm'] = $character->chrm;
	          $statistics['sage'] = $character->sage;
	          $statistics['volo'] = $character->volo;
	          $statistics['ling'] = $character->ling;
			  foreach ($statistics as $key => $one_stat) {
			  	if ($key == "forc") {
			  		$statisticsDisplay = $statisticsDisplay . '<span class="nowrap">';
			  	} else if ($key == "endu" || $key == "sage") {
			  		$statisticsDisplay = $statisticsDisplay . '</span> <span class="nowrap">';
			  	} else if ($key == "perc") {
			  		$statisticsDisplay = $statisticsDisplay . '</span> <br /><hr /><span class="nowrap">';
			  	}
			  	$statisticsDisplay = $statisticsDisplay . '<span class="nestedImg" style="margin:4px;padding:1px 4px 3px 0;border:1px solid #ccc;background-color:#eee;border-radius:0.5em;"><span class="tt" id="' . $key . '"></span><h2 class="editable" style="display:inline;padding:0 0 0 4px;margin: 0;display: inline-block;min-width:3ch;"><span class="value" data-type="' . $key . '" data-content="' . $one_stat . '">' . $one_stat . '</span><div class="edit"></div></h2></span>';
			  	if ($key == "ling") {
			  		$statisticsDisplay = $statisticsDisplay . '</span>';
			  	}
			  }
			  try {
			  	$username = $user->name;
			  } catch (Exception $e) {
			  	$username = 'supprimé';
			  };
	          echo '
	          		<tr class="charaID" id="' . $character->id . '">
		          		<td colspan="1" class="name">' . $active . ' <strong class="editable">
			          		<span class="value" data-type="name" data-content="' . $character->name . '">' . $character->name . '
			          		</span><div class="edit"></div>
			          		</strong>
		          		</td>
		          		<td colspan="2" class="level" style="font-size:1.1em;">
		          			Niveau 
			          		<strong class="editable">
			          		<span class="value lvl" data-type="level" data-content="' . $character->level . '">' . $character->level . '</span><div class="edit"></div></strong> (
			          		<strong class="editable"><span class="value" data-type="xp" data-content="' . $character->xp . '">' . $character->xp . '</span><div class="edit"></div></strong> xp ) 
			          		' . $gender . '</span>
		          		</td>
		          		<td class="gold">
		          			<strong class="editable">
		          				<span class="value gold" data-type="gold" data-content="' . $character->gold . '">' . $character->gold . '</span><div class="edit"></div><img src="../img/itm/misc/0a.png" width="18" height="18" style="margin-left:4px;margin-bottom:-5px;" />
		          			</strong>
		          		</td>
		          		<td colspan="5"></span>
		    			<td class="see_equip" id="' . $character->equipment_id . '" style="
		    				background-color: #91aac1;
		    				cursor: pointer;
		    			">
		    				<img src="../img/icons/equi.png" />
		    			</td>
		    			<td class="see_inv" id="' . $character->inventory_id . '" style="
		    				background-color: #c1a591;
		    				cursor: pointer;
		    			">
		    				<img src="../img/icons/inv.png" />
		    			</td>
		    			<td>ID ' . $character->id . '</td>
		    			<td>
		    				[' . $username . ']
		    			</td>
		    		</tr>
		    		<tr class="charaID" id="' . $character->id . '">
		    			<td class="race">
			    			<img src="../img/icons/races/' . $character->race . '.png" /><br />
			    			<img src="../img/icons/classes/' . $character->class . '.png" />
		    			</td>
		    			<td class="avat">
		    				<img src="../img/avatars/' . $character->avatar_url . '.jpg" width="72" height="72" style="display:block;"/>
		    			</td>
		    			<td colspan="2" class="title">
		    				<strong class="editable"><span class="value" data-type="rank" data-content="' . $character->rank . '">' . ranksDisplay($character->rank, $character->gender) . '</span><div class="edit"></div></strong><br />
		    				<strong class="editable"><span class="value" data-type="title" data-content="' . $character->title . '">' . titleDisplay($character->title) . '</span><div class="edit"></div></strong>
		    			</td>
		    			<td colspan="4" class="trait">' . $traitsDisplay . '</td>
		    			<td colspan="4" class="stats">' . $statisticsDisplay . '</td>
		    			<td class="loc_x">
			    			X:
			    			<strong class="editable"><span class="value" data-type="loc_x" data-content="' . $character->loc_x . '">' . $character->loc_x . '</span><div class="edit"></div></strong>
			    			Y:
			    			<strong class="editable"><span class="value" data-type="loc_y" data-content="' . $character->loc_y . '">' . $character->loc_y . '</span><div class="edit"></div></strong> (<strong class="editable"><span class="value" data-type="loc_sub" data-content="' . $character->loc_sub . '">' . $character->loc_sub . '</span><div class="edit"></div></strong>)
		    			</td>
		    		</tr>
		    		<tr id="' . $character->id . '" class="smallImages charaID" style="font-size:1.2em;">
		    			<td colspan="2">
		    				<span class="tt" id="ap"></span>
		    				<font color="OliveDrab"> 
		    					<strong class="editable"> 
		    						<span class="value" data-type="ap" data-content="' . $character->ap . '">' . $character->ap . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="Salmon">
		    					<strong class="editable">
		    						<span class="value" data-type="ap_max" data-content="' . $character->ap_max . '">' . $character->ap_max . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="SteelBlue">
		    					<strong class="editable">
		    						<span class="value" data-type="ap_regen" data-content="' . $character->ap_regen . '">' . $character->ap_regen . '</span><div class="edit"></div>
		    					</strong>
		    				</font>
		    			</td>
		    			<td colspan="2">
		    				<span class="tt" id="mp"></span>
		    				<font color="OliveDrab">
		    					<strong class="editable"> 
		    						<span class="value" data-type="mp" data-content="' . $character->mp . '">' . $character->mp . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="Salmon">
		    					<strong class="editable">
		    						<span class="value" data-type="mp_max" data-content="' . $character->mp_max . '">' . $character->mp_max . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="SteelBlue">
		    					<strong class="editable">
		    						<span class="value" data-type="mp_regen" data-content="' . $character->mp_regen . '">' . $character->mp_regen . '</span><div class="edit"></div>
		    					</strong>
		    				</font>
		    			</td>
		    			<td colspan="2">
		    				<span class="tt" id="df"></span>
		    				<font color="OliveDrab">
		    					<strong class="editable"> 
		    						<span class="value" data-type="df" data-content="' . $character->df . '">' . $character->df . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="Salmon">
		    					<strong class="editable">
		    						<span class="value" data-type="df_max" data-content="' . $character->df_max . '">' . $character->df_max . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="SteelBlue">
		    					<strong class="editable">
		    						<span class="value" data-type="df_regen" data-content="' . $character->df_regen . '">' . $character->df_regen . '</span><div class="edit"></div>
		    					</strong>
		    				</font>
		    			</td>
		    			<td colspan="2"></td>
		    			<td colspan="2">
		    				<span class="tt" id="hp"></span>
		    				<font color="OliveDrab">
		    					<strong class="editable"> 
		    						<span class="value" data-type="hp" data-content="' . $character->hp . '">' . $character->hp . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="Salmon">
		    					<strong class="editable">
		    						<span class="value" data-type="hp_max" data-content="' . $character->hp_max . '">' . $character->hp_max . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="SteelBlue">
		    					<strong class="editable">
		    						<span class="value" data-type="hp_regen" data-content="' . $character->hp_regen . '">' . $character->hp_regen . '</span><div class="edit"></div>
		    					</strong>
		    				</font>
		    			</td>
		    			<td colspan="2">
		    				<span class="tt" id="mana"></span>
		    				<font color="OliveDrab" >
		    					<strong class="editable"> 
		    						<span class="value" data-type="mana" data-content="' . $character->mana . '">' . $character->mana . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="Salmon">
		    					<strong class="editable">
		    						<span class="value" data-type="mana_max" data-content="' . $character->mana_max . '">' . $character->mana_max . '</span><div class="edit"></div>
		    					</strong>
		    				</font> / <font color="SteelBlue">
		    					<strong class="editable">
		    						<span class="value" data-type="mana_regen" data-content="' . $character->mana_regen . '">' . $character->mana_regen . '</span><div class="edit"></div>
		    					</strong>
		    				</font>
		    			</td>'. (($character->owner == 0) ? 
		    				"<td class='oldowner' style='color:#aaa;font-size:0.65em;'>Ancien propriétaire: " . $character->_owner . "</td>" 
		    				: 
		    				"<td class='deleteChar'><img src='../img/icons/del.png' height='24' width='24' style='margin-top:8px;'/></td>") . '
		    		</tr>
		    		<th colspan="13" style="height:8px;background:#bbb;">
		    		</th>';
	      }
	      if(empty($unvalProfiles[0])){
	        echo '<tr>
	              <td colspan="13" style="color: DarkGray;">Aucun autre personnage à afficher.</td>
	            </tr>';
	      }
	      ?>
	    </tbody>
	  </table>
	</div>
	<script>
		/* --- Inv Edit --- */
		$('.see_equip').off('click').click(function() {
			let selectedEquipID = $(this).attr('id'),
				selectedEquiID = {'id': selectedEquipID};
			$.get( '{{ route("getEquiById") }}', selectedEquiID)
		      	.done(function(data){
		      		$('#mainAdminContentsView').html(data);
		      	})
		      	.fail(function(){
		      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!<br />'+route.dir+'</strong></font>');
		    });
		});
		$('.see_inv').off('click').click(function() {
			let selectedInveID = $(this).attr('id'),
				selectedInvID = {'id': selectedInveID};
			$.get( '{{ route("getInvById") }}', selectedInvID)
		      	.done(function(data){
		      		$('#mainAdminContentsView').html(data);
		      	})
		      	.fail(function(){
		      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!<br />'+route.dir+'</strong></font>');
		    });
		});
		/* --- Table Edit --- */
		function editCharaTables(){
			// manage input display + span hide
			$('table.charas tbody').on('dblclick', 'span.value', function(){
				var editSpan = $(this), 
					editDiv = $(this).nextAll('div.edit').first(), 
					valCell = $.trim($(this).data('content')),
					valLgt = valCell.length;
				editSpan.hide();
				editDiv.show().html('\
					<div class="input-group" style="display:inline;white-space:nowrap;">\
					  <input id="currentInput" type="text" value="'+valCell+'" style="display:inline;width:'+(valLgt+1)+'ch;padding:0;margin:0;z-index:999;" />\
					  <span class="input-group-btn">\
					    <button type="button" id="save" style="padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;">✔</button>\
					    <button type="button" id="close" style="padding:0;margin:0;background:Salmon;border-radius:15%;border:1px solid #333;z-index:999;">↩</button>\
					  </span>\
					</div>');
				// set control on input + remove all other fields
				$(this).parent().find('input').focus();
				$(this).closest('tbody').find('.editable').not($(this).closest('.editable')).each(function(){
					$(this).find('span.value').show();
					$(this).find('div.edit').hide();
				});
			}); 
			// define close & save behaviour
			$('table.charas').on('click','#close', function(){
				$(this).closest('td').find('span.value').show();
				$(this).closest('div').hide();
			});
			$('table.charas').on('keypress', '#currentInput', function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    $('#save').trigger( "click" );
                	event.stopPropagation();
                }
                if (keycode == '27') {
                    $('#close').trigger( "click" );
                	event.stopPropagation();
                }
            });
			$('table.charas').on('click','#save', function(){
				let getValueInput = String($(this).closest('div').find('input').val()),
					inputType = String($(this).closest('.editable').find('.value').data('type')),
					charaID = Number($(this).closest('tr.charaID').attr('id'));
				// if data-name is allowed (prefiltering before even sending to backend)
				if (inputType === "name" || inputType === "level" || inputType === "xp" || inputType === "gold" || inputType === "rank" || inputType === "title" || inputType === "loc_x" || inputType === "loc_y" || inputType === "loc_sub" || inputType === "ap" || inputType === "ap_max" || inputType === "ap_regen" || inputType === "mp" || inputType === "mp_max" || inputType === "mp_regen" || inputType === "df" || inputType === "df_max" || inputType === "df_regen" || inputType === "hp" || inputType === "hp_max" || inputType === "hp_regen" || inputType === "mana" || inputType === "mana_max" || inputType === "mana_regen" || inputType === "forc" || inputType === "dext" || inputType === "inte" || inputType === "endu" || inputType === "defe" || inputType === "vite" || inputType === "perc" || inputType === "chan" || inputType === "chrm" || inputType === "sage" || inputType === "volo" || inputType === "ling") {
				// send info as AJAX
					$.ajax({
			            method: 'POST',
			            url: '{{ route("editChar") }}',
			            global: false,
			            data: JSON.stringify({chara: charaID, 
							type: inputType, 
							content: getValueInput}),
			            contentType: "application/json",
			            error: function(jqXHR, textStatus, errorThrown) {
			                console.log(jqXHR);
			                console.log(textStatus);
			                console.log(errorThrown);
			            },
			            success: function (data) { 
			              $('div#changelog').html(JSON.stringify(data.success));
			              $('#changelog').fadeIn( 750, function() {
						    $('#changelog').fadeOut(1750);
						  });
			            }
			        });
				// and change front content
					if ($(this).parent().is('h2.editable')) {
						$(this).closest('span.nestedImg').find('span.value').text(getValueInput);
					} else {
						$(this).closest('.editable').find('span.value').text(getValueInput);
					}
					//print changes
					$(this).closest('td').find('span.value').show();
					$(this).closest('div').hide();
				//else cancel
				} else {
					alert("Eh! Que tentez-vous de faire là? :O\n\nCette ressource n'est pas éditable pour une raison, vous risquez bien de faire des bêtises...");
					location.reload(true);
				}
			});
			$('td.deleteChar').click(function(charaID){
				let deleteID = Number($(this).closest('tr.charaID').attr('id')),
					charname = $(this).closest('table').find('tr#'+deleteID+' td.name').html(),
					charlvl = $(this).closest('table').find('tr#'+deleteID+' td.level').html(),
					chargold = $(this).closest('table').find('tr#'+deleteID+' td.gold').html(),
					charrace = $(this).closest('table').find('tr#'+deleteID+' td.race').html(),
					chartitl = $(this).closest('table').find('tr#'+deleteID+' td.title').html(),
					chartrai = $(this).closest('table').find('tr#'+deleteID+' td.trait').html(),
					charstat = $(this).closest('table').find('tr#'+deleteID+' td.stats').html(),
					charavat = $(this).closest('table').find('tr#'+deleteID+' td.avat').html();
					console.log(charname);
				$('body').append("\
					<div style='position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);border-radius:1em;background-color:#ccc;text-align:center;padding:16px;width:300px;border:1px solid #888;' id='deleteBox'>\
						<h1>Supprimer l'utilisateur\?</h1><br />\
						<span class='adminReplaceAction'><h2 style='background-color:salmon;cursor:pointer;padding: 8px;' id='deleteThisCharacter' class='hoverable'>Supprimer!</h2></span>\
						<h2 style='background-color:olivedrab;cursor:pointer;padding: 8px;' id='cancelDeletion' class='hoverable'>Annuler</h2>\
					</div>");
				$('h2#cancelDeletion').click(function(){
					$('div').remove('#deleteBox');
				});
				$('h2#deleteThisCharacter').click(function(){
					$(this).remove();
					$('.adminReplaceAction').html('\
						<div style="background-color:lightcoral;border:5px double peru;">\
							<form id="adminDelete" action="{{ route("adminDel") }}"><br />\
								Personnage: <input type="text" value="'+deleteID+'" name="id" class="field left" style="max-width:9ch;" readonly><br />\
								<br />\
								<table><tr>\
								<td>'+charname+'</td>\
								<td>'+charlvl+'</td>\
								<td>'+chargold+'</td>\
								</tr><tr>\
								<td>'+charrace+'</td>\
								<td>'+charavat+'</td>\
								<td>'+chartitl+'</td>\
								</tr><tr>\
								<td colspan="3">'+chartrai+'</td>\
								</tr><tr>\
								<td colspan="3">'+charstat+'</td>\
								</tr></table>\
								<br />\
								<input type="submit" class="standard" value="Supprimer" form="adminDelete">\
								<br /><br />\
							</form>\
						</div>\
						');
				});
			});
		}
		$(document).ready(editCharaTables);
		$(document).ajaxComplete(editCharaTables);
	</script>
</span>