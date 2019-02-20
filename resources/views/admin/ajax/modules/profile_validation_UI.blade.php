<div class="tableWrapper">
  	<table>
	    <tbody>
      		<tr>
      			<strong>
      				<table>
      					<tbody>
      						<tr>
      							<td colspan="1" class="backBtn" id="backToChar">⤺</td>
      							<td colspan="2" class="name edit_info" style="font-size:1.25em;"><strong>{{ $chara->name }}</strong></td>
								<td colspan="2" class="level edit_info"><span style="font-size:1.25em;">Niveau <strong>{{ $chara->level }}</strong> ( {{ $chara->xp }}xp )</span></td>
								<td colspan="1" style="font-size:0.65em;">[ID] {{ $chara->id }} </td>
							</tr>
							<tr>
								<td>
      								<?php echo '<img src="../img/avatars/' . $chara->avatar_url . '.jpg" width="40" height="40" style="display:block;"/>' ?>	
      							</td>
								<td>
		    						<strong>
		    							{!! titleDisplay($chara->title) !!}
		    						</strong>
      							</td>
      							<td>
      								<?php echo '<img src="../img/icons/races/' . $chara->race . '.png" />'
      								?>
      							</td>
      							<td>
      								<?php echo '<img src="../img/icons/classes/' . $chara->class . '.png" />' ?>
      							</td>
      							<td>
      								<strong>
      									{!! ranksDisplay($chara->rank, $chara->gender) !!}
      								</strong>
      							</td>
      							<td>
      								{{ $chara->gold }} <img src="../img/itm/misc/0a.png" style="margin-left:4px;margin-bottom:-5px;" width="18" height="18">
      							</td>
      						</tr>
							<tr class="smallImages">
								<td><span class="tt" id="ap"></span><font color="OliveDrab"> {{ $chara->ap }} </font> / <font color="Salmon">{{ $chara->ap_max }} </font> / <font color="SteelBlue">{{ $chara->ap_regen }} </font></td>
								<td><span class="tt" id="mp"></span><font color="OliveDrab"> {{ $chara->mp }} </font> / <font color="Salmon">{{ $chara->mp_max }} </font> / <font color="SteelBlue">{{ $chara->mp_regen }} </font></td>
								<td><span class="tt" id="df"></span><font color="OliveDrab"> {{ $chara->df }} </font> / <font color="Salmon">{{ $chara->df_max }} </font> / <font color="SteelBlue">{{ $chara->df_regen }} </font></td>
								<td></td>
								<td><span class="tt" id="hp"></span><font color="OliveDrab"> {{ $chara->hp }} </font> / <font color="Salmon">{{ $chara->hp_max }} </font> / <font color="SteelBlue">{{ $chara->hp_regen }} </font></td>
								<td><span class="tt" id="mana"></span><font color="OliveDrab"> {{ $chara->mana }} </font> / <font color="Salmon">{{ $chara->mana_max }} </font> / <font color="SteelBlue">{{ $chara->mana_regen }} </font></td>
							</tr>
							<tr><td colspan="6"></td></tr>
							<tr>
								<?php
									$string_content = json_encode($profMess->content);
									try {
									  $quill = new \DBlackborough\Quill\Render($string_content);
									  $result = $quill->render();
									} catch (\Exception $e) {
									  echo $e->getMessage();
									}
									$content = substr($result , 3, -3);
									echo '<td colspan="6" style="padding:32px;font-size:1.1em;background-color:FloralWhite;">' . $content . '</td>';
								?>
							</tr>
							<tr><td colspan="6"></td></tr>
							<tr>
								<?php
									$traits = array();
								    $traitsDisplay = '';
								    $traits[] = $chara->class_trait_1;
								  for ($x = 1; $x <= 5; $x++)
									{
									    $entry = 'race_trait_' . $x;
									    $traits[] = $chara->$entry;
									}
								  for ($x = 0; $x <= 9; $x++)
									{
									    $entry = 'main_trait_' . $x;
									    $traits[] = $chara->$entry;
									}
								  for ($x = 0; $x <= 9; $x++)
									{
									    $entry = 'sec_trait_' . $x;
									    $traits[] = $chara->$entry;
									}
								  foreach ($traits as $trait) {
								  	if ($trait != NULL) {
								  		$traitsDisplay = $traitsDisplay . '<span class="tt" style="border:1px solid #ccc;background-color: #ddd;border-radius: 0.5em;padding:4px;margin:4px;font-size: 1em;white-space:nowrap;" id="' . $trait . '"></span> ';
								  	}
								  }
								  echo '<td colspan="6" style="padding:8px;">' . $traitsDisplay . '</td>';
								?>
							</tr>
							<tr>
								<td colspan="6" style="padding:8px;">
									<?php 
										$statistics = array();
										$statisticsDisplay = '';
										$statistics['forc'] = $chara->forc;
										$statistics['dext'] = $chara->dext;
										$statistics['inte'] = $chara->inte;
										$statistics['endu'] = $chara->endu;
										$statistics['defe'] = $chara->defe;
										$statistics['perc'] = $chara->perc;
										$statistics['chan'] = $chara->chan;
										$statistics['chrm'] = $chara->chrm;
										$statistics['sage'] = $chara->sage;
										$statistics['volo'] = $chara->volo;
										$statistics['ling'] = $chara->ling;
										foreach ($statistics as $key => $one_stat) {
											if ($key == "forc") {
												$statisticsDisplay = $statisticsDisplay . '<span class="nowrap">';
											} else if ($key == "endu" || $key == "sage") {
												$statisticsDisplay = $statisticsDisplay . '</span> <span class="nowrap">';
											} else if ($key == "perc") {
												$statisticsDisplay = $statisticsDisplay . '</span> <br /><hr /><span class="nowrap">';
											}
											$statisticsDisplay = $statisticsDisplay . '<span class="nestedImg" style="margin:4px;padding:1px 4px 3px 0;border:1px solid #ccc;background-color:#eee;border-radius:0.5em;"><span class="tt" id="' . $key . '"></span><h2 style="display:inline;padding:0 0 0 4px;margin: 0;display: inline-block;min-width:15ch;font-size:1em;">' . statTranslation($key, $one_stat, $chara->gender) . '</h2></span>';
											if ($key == "ling") {
												$statisticsDisplay = $statisticsDisplay . '</span>';
											}
										}
										echo $statisticsDisplay;
									?>
								</td>
							</tr>
							<?php 
								$addedMainValues = $chara->forc+$chara->dext+$chara->endu+$chara->defe+$chara->inte;
								$addedSecValues = $chara->perc+$chara->chan+$chara->chrm+$chara->sage+$chara->volo+$chara->ling;
								if ($addedMainValues !== $chara->totalmainstatscapital || $addedSecValues !== $chara->totalsecstatscapital) {
									echo '<tr><td colspan="6" style="background-color:salmon;padding:32px;"><strong>[ATTENTION]</strong><br />Ce membre a triché dans sa création de personnage, et s\'est ajouté ' . (($addedMainValues - $chara->totalmainstatscapital) + ($addedSecValues - $chara->totalsecstatscapital)) . ' point(s). Nous conseillons de le refuser.<br />Nous avons laissé cette faille afin de repérer les "tricheurs dans l\'âme" avant qu\'ils aient accès au jeu.<br /><strong>[ATTENTION]</strong></td></tr>';
								}
							?>
							<tr id="preCom"><td colspan="6"></td></tr>
							<tr>
								<td colspan="2" id="validate" class="hoverable" style="background-color:olivedrab;cursor:pointer;line-height:3;" data-profile="{{ $id }}"><strong>Accepter</strong></td><td colspan="3" id="comment" class="hoverable" style="background-color:burlywood;cursor:pointer;line-height:3;" data-profile="{{ $id }}"><strong>Commenter</strong></td><td id="decline" class="hoverable" style="background-color:indianred;cursor:pointer;line-height:3;" data-profile="{{ $id }}"><strong>Refuser</strong></td>
							</tr>
      					</tbody>
      				</table>
			    </strong>
	        </tr>
	    </tbody>
	</table>
	<script>
		$(document).ready( function() {
			//admin actions
			$('td#validate').click( function () {
			      let id = $(this).data('profile'),
			          profileObject = {'id': id};
			      $.get( '{{ route("valProf") }}', profileObject)
			      	.done(function(){
			      		displayAdminAction('Personnage validé avec succès!');
			      		$.ajax({
						    type: 'GET', 
						    url : 'm_char', 
						    success : function (data) {
						        $('#content').html(data);
						    }
						});
			      	})
			      	.fail(function(){
			      		displayAdminAction('<font color="indianred"><strong>Erreur dans la validation!</strong></font>');
			      		$.ajax({
						    type: 'GET', 
						    url : 'm_char', 
						    success : function (data) {
						        $('#content').html(data);
						    }
						});
			      	});
			});
			$('td#backToChar').click( function () {
	      		$.ajax({
				    type: 'GET', 
				    url : 'm_char', 
				    success : function (data) {
				        $('#content').html(data);
				    }
				});
			});
			$('td#comment').click( function () {
				if($('#quillEditor').length == 0) {
					$('tr#preCom').after('\
						<tr id="quillEditor">\
							<td colspan="6">\
								<div id="quill-editor" style="max-width:100%;"></div>\
								<input id="comSend" type="button" class="greenhover" value="Confirmer" style="font-size:1.25em;">\
							</td>\
						</tr>');
					// initiate com library
					let quill = new Quill('#quill-editor', {
					    modules: {
					      toolbar: [
					        ['bold', 'italic', 'underline'],
					        ['blockquote'],
					        [{ 'list': 'ordered'}, { 'list': 'bullet'}],
					        [{ 'indent': '-1'}, { 'indent': '+1' }],
					        [{ 'header': [3, 4, false] }],
					        [{ 'color': [] }],
					        [{ 'align': [] }],
					        ['clean']
					      ]
					    },
					    placeholder: 'Commentaire',
					    theme: 'snow'
					  });
					$('#comSend').click( function() {
				      let id = $('#comment').data('profile'),
				      	  comment = JSON.stringify(quill.getContents()),
				          profileObject = {'id': id, 'comment': comment};
				      $.get( '{{ route("comProf") }}', profileObject)
				      	.done(function(){
				      		displayAdminAction('Personnage commenté avec succès!<br />En attente d\'édition.');
				      		$.ajax({
							    type: 'GET', 
							    url : 'm_char', 
							    success : function (data) {
							        $('#content').html(data);
							    }
							});
				      	})
				      	.fail(function(){
				      		displayAdminAction('<font color="indianred"><strong>Erreur dans l\'envoi du commentaire!</strong></font>');
				      		$.ajax({
							    type: 'GET', 
							    url : 'm_char', 
							    success : function (data) {
							        $('#content').html(data);
							    }
							});
				      	});
				    });
				}
			});
			$('td#decline').click( function () {
		      let id = $(this).data('profile'),
		          profileObject = {'id': id};
		      $.get( '{{ route("decProf") }}', profileObject)
		      	.done(function(){
		      		displayAdminAction('Personnage refusé avec succès!');
		      		$.ajax({
					    type: 'GET', 
					    url : 'm_char', 
					    success : function (data) {
					        $('#content').html(data);
					    }
					});
		      	})
		      	.fail(function(){
		      		displayAdminAction('<font color="indianred"><strong>Erreur dans le refus du personnage!</strong></font>');
		      		$.ajax({
					    type: 'GET', 
					    url : 'm_char', 
					    success : function (data) {
					        $('#content').html(data);
					    }
					});
		      	});
			});
		});
	</script>
</div>