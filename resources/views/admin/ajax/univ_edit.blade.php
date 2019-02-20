<div id="itemnew" style="border-radius: 1em;border:1px solid #999;background-color: #eee;min-width: 100%;">
	<div class="flexvert wrap center lexEntry" id="<?php echo $thislex->id; ?>">
		<div colspan="1" class="backBtn" id="backToChar" style="width:15vw;height:1.5ch;font-size:2em;">⤺</div>
		<div class="flexbox" style="min-width: 70vw;">
			<div class="flexcont">
				<div class="flexvert wrap center">
					<div style="white-space: nowrap;margin:0 1em;">
						<h1 style='display:inline;margin:0;'>Titre</h1>
						<input id='title' name="title" type='text' value="<?php echo $thislex->title; ?>" pattern="[\wÀ-ÿ '-]{3,16}"/>
					</div>
					<div style="white-space: nowrap;margin: 0.5em 1em;">
						<h1 style='display:inline;margin: 0.5em 1em;'>Type:</h1>
						<select id="type" name="type" data-type="<?php echo $thislex->type; ?>">
			              <option value="Livre" selected>Livre</option>
			              <option value="Événement">Événement</option>
			              <option value="Endroit">Endroit</option>
			              <option value="Dieu">Dieu</option>
			              <option value="Personne">Personne</option>
			              <option value="Faune">Faune</option>
			              <option value="Flore">Flore</option>
			              <option value="Groupe">Groupe</option>
			              <option value="Langue">Langue</option>
			              <option value="Race">Race</option>
			              <option value="Classe">Classe</option>
			              <option value="Objet">Objet</option>
			              <option value="Autre">Autre</option>
			              <option value="Index">Index</option>
			            </select>
					</div>
				</div>
				<div class="flexvert wrap center">
					<div style="white-space: nowrap;margin:1em;">
						<h1 style='display:inline;margin:0;'>Icone</h1>
						<input id='icon' name="icon" type='text' value="<?php echo $thislex->icon; ?>" />
					</div>
					<div style="white-space: nowrap;margin:1em;">
						<h1 style='display:inline;margin:0;'>Info</h1>
						<textarea id='info' name="info" rows="9" cols="50"> 
							<?php echo $thislex->info; ?>
						</textarea>
					</div>
				</div>
			</div>
			<textarea id="lexiconEditor" rows="33" cols="100" name="lexContent" style="border-radius: 5px;">
          		<?php echo $thislex->content; ?>
          	</textarea>
		</div>
		<input class="ui-button ui-widget ui-corner-all" type="submit" value="Enregistrer les changements" style="padding:1em;margin:1em;font-size:125%;">
	</div>
	<script>
		$( document ).ready(function() {
		    var type = $('#type').data('type');
			$('#type option[value="'+type+'"]').prop('selected', true);
			$('#backToChar').off('click').click( function () {
		  		$.ajax({
				    type: 'GET', 
				    url : 'm_univ', 
				    success : function (data) {
				        $('#content').html(data);
				    }
				});
			});
		});
		$(document).ready(function() {
			var contents = $('textarea[name="lexContent"]').val();

		    // actual send
		    $('input[type="submit"]').click(function() {
		        let id = $('div.lexEntry').attr('id'),
		        	textContent = $('#lexiconEditor').val(),
		        	inputTitle = $('input[name="title"]').val(),
		        	inputType = $('select[name="type"]').val(),
		        	inputIcon = $('input[name="icon"]').val(),
		        	inputInfo = $('textarea[name="info"]').val();
		        console.log(id);
		        $.ajax({
		          method: 'POST',
		          url: '{{ route("editLexicon") }}',
		          global: false,
		          data: JSON.stringify({id: id,
		          			title: inputTitle, 
							type: inputType, 
							content: textContent,
							icon: inputIcon,
							info: inputInfo}),
		          contentType: 'application/json',
		          error: function(jqXHR, textStatus, errorThrown) {
		            displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!</strong></font>')
		          },
		          success: function() {
		            displayAdminAction('<strong>Changements enregistrés!</strong>');
		          }
		        });
		    });
		});
	</script>
</div>