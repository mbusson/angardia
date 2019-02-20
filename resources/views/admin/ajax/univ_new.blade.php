<div id="itemnew" style="border-radius: 1em;border:1px solid #999;background-color: #eee;min-width: 100%;">
	<div class="flexvert wrap center">
		<div class="flexbox" style="min-width: 70vw;">
			<div class="flexcont">
				<div class="flexvert wrap center">
					<div style="white-space: nowrap;margin:0 1em;">
						<h1 style='display:inline;margin:0;'>Titre</h1>
						<input id='title' name="title" type='text' pattern="[\wÀ-ÿ '-]{3,16}"/>
					</div>
					<div style="white-space: nowrap;margin: 0.5em 1em;">
						<h1 style='display:inline;margin: 0.5em 1em;'>Type:</h1>
						<select name="type">
			              <option value="Livre" selected="selected">Livre</option>
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
						<input id='icon' name="icon" type='text' value="/img/lex/nomdelimage.jpg" />
					</div>
					<div style="white-space: nowrap;margin:1em;">
						<h1 style='display:inline;margin:0;'>Info</h1>
						<textarea id='info' name="info" rows="9" cols="50"> 
							<strong>Clé:</strong><br>
							<em>Valeur</em><br>
						</textarea>
					</div>
				</div>
			</div>
			<div>
				<div id="lexiconEditor"></div>
			</div>
		</div>
		<input class="ui-button ui-widget ui-corner-all" type="submit" value="Enregistrer cette nouvelle page" style="padding:1em;margin:1em;font-size:125%;">
	</div>
	<script>
		/* WYSIWYG */
		$('#lexiconEditor').trumbowyg({
		  	tagsToRemove: ['script', 'link', 'img'],
		  	autogrow: true,
		  	urlProtocol: true,
		  	minimalLinks: true,
		  	btns: [
		  	  ['viewHTML'],
		      ['removeformat'],
		      ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
		      ['formatting'],
		      ['strong', 'em', 'del'],
		      ['unorderedList', 'orderedList'],
		      ['superscript', 'subscript'],
		      ['link'],
		      ['insertImage'],
		      ['foreColor', 'backColor'],
		      ['specialChars'],
		      ['horizontalRule'],
		      ['historyUndo', 'historyRedo'],
		      ['fullscreen']
		    ],
		    lang: 'fr'
		});
		$(document).ready(function() {
		    $('input[type="submit"]').click(function() {
		        let textContent = $('#lexiconEditor').trumbowyg('html'),
		        	inputTitle = $('input[name="title"]').val(),
		        	inputType = $('select[name="type"]').val(),
		        	inputIcon = $('input[name="icon"]').val(),
		        	inputInfo = $('textarea[name="info"]').val();
		        console.log(textContent);
		        $.ajax({
		          method: 'POST',
		          url: '{{ route("makeNewLexicon") }}',
		          global: false,
		          data: JSON.stringify({title: inputTitle, 
							type: inputType, 
							content: textContent,
							icon: inputIcon,
							info: inputInfo}),
		          contentType: 'application/json',
		          error: function(jqXHR, textStatus, errorThrown) {
		            console.log(JSON.stringify(jqXHR));
		            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		          },
		          success: function() {
		            //
		          }
		        });
		    });
		});
	</script>
</div>