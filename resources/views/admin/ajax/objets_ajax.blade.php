<span id="itemlist">
	<div class="tableWrapper">
	  <table class="items" style="table-layout:fixed;width:100%;">
	    <tbody>
	      <?php
	      echo '<tr>
	      			<th colspan="2">Nom</th>
	      			<th colspan="1">Icône</th>
	      			<th colspan="1">Niv.</th>
	      			<th colspan="3">Classes</th>
	      			<th colspan="1">Prix Moy.</th>
	      			<th colspan="1">Poids</th>
	      			<th colspan="6">Description</th>
	      			<th colspan="1">Type</th>
	      			<th colspan="3">Sous-type</th>
	      			<th colspan="6">Action</th>
	      			<th colspan="1"></th>
	      		</tr>';
	      foreach ($items as $item) {
	      		$classes = explode(",", $item->classes);
	      		$classesDisplay = '';
	      		foreach ($classes as $class) {
	      			$classesDisplay = $classesDisplay . '<img src="../img/icons/classes/' . $class . '.png" height="24" width="24" style="padding:1.5px;">';
	      }
	      /* Handling Action */
	      if (!function_exists('parseActionEntry')) {
	        function parseActionEntry($actionObject, $entry) {
	        	$actionObject = json_decode($actionObject, true);
	        	$actionSummary = "";
			    if(!is_array($actionObject[$entry])){
			      	$actionSummary = $actionObject[$entry];
			    } 
			    else if ($entry == "Bonus") {
			    	foreach ($actionObject[$entry] as $k => $v) {
			      		$actionSummary = $actionSummary . '
			      			<span style="border:1px solid #999;background:#ccc;height:20px;font-size:12px;padding:4px;">
			      			<span style="border:1px solid #999;background:#ccc;height:32px;">
			      			<span class="tt" id="' . $k . '"></span></span> ' . $v . ' </span>';
			      	}
			    } 
			    else if ($entry == "Malus") {
			    	foreach ($actionObject[$entry] as $k => $v) {
			      		$actionSummary = $actionSummary . '
			      			<span style="border:1px solid #999;background:#ccc;height:20px;font-size:12px;padding:4px;">
			      			<span style="border:1px solid #999;background:#ccc;height:32px;">
			      			<span class="tt" id="' . $k . '"></span></span> -' . $v . ' </span>';
			      	}
			    } 
			    else {
			    	// not used yet
			      	foreach ($actionObject[$entry] as $k => $v) {
			      		if ($k != null && $v != null) {
			      			$actionSummary = $actionSummary . '
			      			<span style="border:1px solid #999;background:#ccc;height:20px;font-size:12px;padding:4px;"><span style="border:1px solid #999;background:#ccc;height:32px;">' . $k . '</span> ' . $v . ' </span>';
			      		} 
			      		else if ($k == null && $v != null) {
			      			$actionSummary = $actionSummary . '<span style="border:1px solid #999;background:#ccc;height:20px;font-size:12px;">' . $v . '</span>';
			      		} 
			      		else {
			      			$actionSummary = "";
			      		}
			      	}
			      	// --
			    }
			    return $actionSummary;
			}
		  }
		  if (!function_exists('parseActionEntryExists')) {
			function parseActionEntryExists($actionObject, $entry) {
	        	$actionObject = json_decode($actionObject, true);
	        	$actionSummary = "";
		      	if (!empty($actionObject[$entry])) {
		      		$actionSummary = $actionSummary . '<span style="border:1px solid #999;background:#ccc;height:20px;font-size:12px;padding:4px;">...</span>';
		      	}
			    return $actionSummary;
			}
		  }
	      $actionDisplay = '<font color="olivedrab">' . parseActionEntry($item->action, "Bonus") . '</font><font color="indianred">' . parseActionEntry($item->action, "Malus") . '</font><font color="slateblue">' . parseActionEntryExists($item->action, "Skill") . '</font><font color="chocolate">' . parseActionEntryExists($item->action, "Trigger") . '</font><font color="slateblue">' . parseActionEntryExists($item->action, "Preset") . '</font>';
	      $actionEdit = '<font color="olivedrab">' . parseActionEntry($item->action, "Bonus") . '</font><br /><font color="indianred">' . parseActionEntry($item->action, "Malus") . '</font><br /><font color="slateblue">' . parseActionEntry($item->action, "Skill") . '</font><br /><font color="chocolate">' . parseActionEntry($item->action, "Trigger") . '</font><br /><font color="slateblue">' . parseActionEntry($item->action, "Preset") . '</font>';
	            echo '
	          		<tr class="itemID" id="' . $item->id . '">
		          		<td colspan="2" class="name"><strong class="editable">
			          		<span class="value" data-type="name" data-content="' . $item->name . '">' . $item->name . '
			          		</span><div class="edit"></div>
			          		</strong><br />
			          		<span style="color: #999;font-size:0.8em;">[ ' . $item->id . ' ]</span>
		          		</td>
		          		<td colspan="1">
		          			<span class="value" data-type="icon" data-content="' . $item->icon . '"><img src=".' . $item->icon . '" height="24" width="24" /></span><div class="edit icon"></div></strong>
		          		</td>
		          		<td colspan="1" class="level" style="font-size:1.1em;">
		          			Lv
			          		<strong class="editable">
			          		<span class="value" data-type="level" data-content="' . $item->level . '">' . $item->level . '</span><div class="edit"></div></strong>
		          		</td>
		          		<td colspan="3" style="line-height:14px;">
		          			<strong class="editable">
		          				<span class="value" data-type="classes" data-content="' . $item->classes . '" style="border-bottom:none;">' . $classesDisplay . '</span><div class="edit classes"></div>
		          			</strong>
		          		</td>
		          		<td colspan="1">
		          			<strong class="editable">
		          				<span class="value" data-type="price" data-content="' . $item->price . '">' . $item->price . '</span><div class="edit"></div><img src="../img/itm/misc/0a.png" width="18" height="18" style="margin-left:4px;margin-bottom:-5px;" /></span>
		          			</strong>
		          		</td>
		          		<td colspan="1">
		          			<strong class="editable">
		          				<span class="value" data-type="weight" data-content="' . $item->weight . '">' . $item->weight . '</span><div class="edit"></div><img src="../img/icons/weight.png" style="margin-left:4px;margin-bottom:-5px;" /></span>
		          			</strong>
		          		</td>
		    			<td colspan="6" style="padding: 0 16px;">
		          			<span class="editable descr">
		          				<span class="value" data-type="descr" data-content="' . $item->descr . '" style="letter-spacing:-0.25px;">' . substr($item->descr, 0, 128) . ((strlen($item->descr) <= 128) ? "" : "...") . '</span><div class="edit descr"></div>
		          			</span>
		          		</td>
		          		<td colspan="1">
		          			<strong class="editable">
		          				<span class="value" data-type="type" data-content="' . $item->type . '">' . itemTypeDisplay($item->type) . '</span><div class="edit type"></div>
		          			</strong>
		          		</td>
		          		<td colspan="3" class="subtype"><span class="editable"><span class="value subtype" data-type="subtype" data-content="' . $item->subtype . '">' . itemSubTypeDisplay($item->type, $item->subtype, $item->id) . '</span><div class="edit subtype"></div></span></td>
		          		<td colspan="6" class="actionsEdit">
		          			<strong class="editable">
		          				<span class="smallImages" data-type="action" data-content="action">' . $actionDisplay . '</span><div class="edit"></div>
		          			</strong>
		          		</td>
		          		<td class="deleteItm">
		          			<img src="../img/icons/del.png" height="24" width="24" style="margin-top:8px;"/>
		          		</td>
		    		</tr>
		    		<th colspan="26" style="height:8px;background:#bbb;">
		    		</th>';
	      }
	      ?>
	    </tbody>
	  </table>
	</div>
	<script>
		/* --- Table Edit --- */
		$('td.deleteItm').click(function(){
			const deletedItemID = $(this).parent('tr').attr('id');
			let deletedItmID = {'id': deletedItemID};
			$.post( '{{ route("deleteItm") }}', deletedItmID)
		      	.done(function(data){
		      		$('tr#'+deletedItemID).remove();
		      	})
		      	.fail(function(){
		      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!<br />'+deletedItemID+'</strong></font>');
		    });
		});
		// ACTIONS SETUP
		if (itemActions == null) {
			var itemActions;
		}
		function createActionDataObject(param) {
			// This func sets up a proper object for Item Actions for later repost
			itemActions = JSON.parse(param);
		}
		function editItemTables(){
			// manage input display + span hide
			$('td.actionsEdit').off('click').click(function(){
				const selectedItemID = $(this).parent('tr').attr('id');
				$('div#editActions').remove();
				$('div#mainAdminContentsView').append("<div id='editActions' style='text-align:center;'><span class='closeBtn'>✅</span><div id='actionsContents'></div></div>");
				let selectedItmID = {'itemID': selectedItemID};
				$.get( '{{ route("getItm") }}', selectedItmID)
			      	.done(function(data){
			      		$('div#editActions').prepend("<h1 style='padding:0.3em;font-size:1.25em;' data-id="+data['id']+"><img src='."+data['icon']+"' /> Éditer les actions de l'objet "+data['name']+"</h1>");
			      	})
			      	.fail(function(){
			      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!<br />'+route.dir+'</strong></font>');
			    });
			    $.get( '{{ route("getItmActions") }}', selectedItmID)
			      	.done(function(data){
			      		const formatted = JSON.parse(data);
			      		createActionDataObject(data);
			      		let bonus = "", malus = "", skill = "", preset = "", trigger = "";
			      		Object.entries(formatted).forEach(
						    ([key, value]) => console.log(key, value)
						);
						for (const key in formatted) {
						  let value = formatted[key];
						  	if (formatted.hasOwnProperty(key)) {
							    if (key == "Bonus") {
							    	//nested obj
							    	if (value === undefined || value.length == 0) {
									    bonus = '-';
									} 
									else {
								    	for (var k in formatted[key]) {
										  let v = formatted[key][k];
										  bonus += '<span class="flexcont bonusval idHolder" id="'+key+'&'+k+'&'+v+'"><span class="tt" id="'+k+'"></span><span class="value" style="height:30px;width:30px;font-size:20px;border-radius:50%;background-color:olivedrab;"> '+v+' </span><span class="removeActionEntry">x</span></span>';
										}
									}
								} 
								else if (key == "Malus") {
									//nested obj
									if (value === undefined || value.length == 0) {
									    malus = '-';
									} 
									else {
								    	for (var k in formatted[key]) {
										  let v = formatted[key][k];
										  malus += '<span class="flexcont malusval idHolder" id="'+key+'&'+k+'&'+v+'"><span class="tt" id="'+k+'"></span><span class="value" style="height:30px;width:30px;font-size:20px;border-radius:50%;background-color:indianred;"> -'+v+' </span><span class="removeActionEntry">x</span></span>';
										}
									}
								} 
								else if (key == "Preset") {
									//nested obj
									if (value === undefined || value.length == 0) {
									    preset = '-';
									} 
									else {
								    	for (var k in formatted[key]) {
										  let v = formatted[key][k];
										  preset += '<span class="flexcont presetval idHolder" id="'+key+'&'+k+'&'+v+'"><span class="value" style="background-color:lightsalmon;border:1px solid coral;border-radius:5%;padding:0.25em;">'+k+'</span><span class="value" style="background-color:peachpuff;border:1px solid sandybrown;border-radius:5%;padding:0.25em;"> '+v+' </span><span class="removeActionEntry">x</span></span>';
										}
									}
								} 
								else if (key == "Skill") {
									//array
									if (value === undefined || value.length == 0) {
									    skill = '-';
									} 
									else {
									    for (var i = 0; i < value.length; i++) {
										    skill += '<span class="skillval idHolder" id="'+key+'&'+value[i]+'"><span class="tt" id="'+value[i]+'"></span><span class="removeActionEntry">x</span></span>';
										}
									}
								} 
								else if (key == "Trigger") {
									//array
									if (value === undefined || value.length == 0) {
									    trigger = '-';
									} 
									else {
									    for (var i = 0; i < value.length; i++) {
										    trigger += '<span class="triggerval idHolder" id="'+key+'&'+value[i]+'">'+value[i]+'<span class="removeActionEntry">x</span></span><br />';
										}
									}
								}
						  	}
						}
			      		$('div#editActions #actionsContents').append("<div class='flexcont' style='margin:0;padding:0;'>\
			      			<div class='actionType' id='bonus' style='padding:0.25em 1.75em;white-space: nowrap;'>\
			      				<h3>Bonus:</3><br /><span class='bonusList'>"+bonus+"</span><br />\
			      				<select id='bonusType'>\
									<option value='ap'>Pts Action</option>\
									<option value='ap_max'>Max. PA</option>\
									<option value='ap_regen'>Régen. PA</option>\
									<option value='mp'>Pts Mouvement</option>\
									<option value='mp_max'>Max. PM</option>\
									<option value='mp_regen'>Régen. PM</option>\
									<option value='df'>Faveurs Divines</option>\
									<option value='df_max'>Max. FD</option>\
									<option value='df_regen'>Régen. FD</option>\
									<option value='hp'>Pts Vie</option>\
									<option value='hp_max'>Max. Vie</option>\
									<option value='hp_regen'>Régen. Vie</option>\
									<option value='mana'>Pts Mana</option>\
									<option value='mana_max'>Max. Mana</option>\
									<option value='mana_regen'>Régen. Mana</option>\
									<option value='forc'>Force</option>\
									<option value='dext'>Dextérité</option>\
									<option value='endu'>Endurance</option>\
									<option value='defe'>Défense</option>\
									<option value='inte'>Intelligence</option>\
									<option value='perc'>Perception</option>\
									<option value='chan'>Chance</option>\
									<option value='chrm'>Charme</option>\
									<option value='sage'>Sagesse</option>\
									<option value='volo'>Volonté</option>\
									<option value='ling'>Linguistique</option>\
									<option value='capa'>Portage</option>\
								</select>\
								<input id='bonusVal' type='text' maxlength='3' style='display:inline;width:3ch;padding:0;margin:0;z-index:999;' />\
								<button type='button' class='saveAction' style='padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>\
			      			</div>\
			      			<div class='actionType' id='malus' style='padding:0.25em 1.75em;white-space: nowrap;'>\
			      			<h3>Malus:</3><br /><span class='malusList'>"+malus+"</span><br />\
			      				<select id='malusType'>\
									<option value='ap'>Pts Action</option>\
									<option value='ap_max'>Max. PA</option>\
									<option value='ap_regen'>Régen. PA</option>\
									<option value='mp'>Pts Mouvement</option>\
									<option value='mp_max'>Max. PM</option>\
									<option value='mp_regen'>Régen. PM</option>\
									<option value='df'>Faveurs Divines</option>\
									<option value='df_max'>Max. FD</option>\
									<option value='df_regen'>Régen. FD</option>\
									<option value='hp'>Pts Vie</option>\
									<option value='hp_max'>Max. Vie</option>\
									<option value='hp_regen'>Régen. Vie</option>\
									<option value='mana'>Pts Mana</option>\
									<option value='mana_max'>Max. Mana</option>\
									<option value='mana_regen'>Régen. Mana</option>\
									<option value='forc'>Force</option>\
									<option value='dext'>Dextérité</option>\
									<option value='endu'>Endurance</option>\
									<option value='defe'>Défense</option>\
									<option value='inte'>Intelligence</option>\
									<option value='perc'>Perception</option>\
									<option value='chan'>Chance</option>\
									<option value='chrm'>Charme</option>\
									<option value='sage'>Sagesse</option>\
									<option value='volo'>Volonté</option>\
									<option value='ling'>Linguistique</option>\
								</select>\
								<input id='malusVal' type='text' maxlength='3' style='display:inline;width:3ch;padding:0;margin:0;z-index:999;' />\
								<button type='button' class='saveAction' style='padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>\
			      			</div>\
			      			<div class='actionType' id='skill' style='padding:0.25em 1.75em;white-space: nowrap;'>\
			      			<h3>Talent:</3><br /><span class='skillList'>"+skill+"</span><br />\
			      				<select id='skillType'>\
							    	<optgroup label='Physique'>\
							    		<option value='athle' title='Bénéficie d\'un bonus passif à tous les tests de constitution.'>Athlète</option>\
										<option value='acrob' title='Les détenteurs de ce talent bénéficient d\'un bien meilleur équilibre et d\'une aisance supérieure pour exécuter des performances acrobatiques.'>Acrobatie</option>\
										<option value='resis' title='Dote son détenteur d\'une meilleure défense et endurance.'>Résistant</option>\
										<option value='voyag' title='Lorsque vous voyagez plus de 6 cases par jour, toute case de déplacement supplémentaire ne coûtera jamais plus que 1 MP.'>Voyageur</option>\
										<option value='charg' title='Au premier tour de combat, votre attaque de base touche tous les ennemis.'>Charge</option>\
										<option value='ambid' title='Avoir une arme (différente) dans chaque main augmente les dégâts finaux de chaque attaque directe.'>Ambidextre</option>\
										<option value='pre_soin' title='Sait se soigner des blessures mineures sur lui-même sans coût matériel ni mana. Chaque blessure physique (et non magique) reçue provoque une chance de guérison partielle.'>Premiers Soins</option>\
										<option value='equit' title='Faculté de monter à cheval et autres animaux sellés sans tests.'>Équitation</option>\
										<option value='balay' title='Contre plusieurs ennemis, votre attaque de base a une chance de toucher deux cibles au lieu d\'une.'>Balayage</option>\
										<option value='intim' title='Peut influencer plus facilement le comportement des autres par intimidation.'>Intimidation</option>\
										<option value='escal' title='Agile comme un singe, les jets d\'escalade bénéficient d\'un large bonus.'>Escalade</option>\
										<option value='natat' title='Sait nager avec aisance, même dans les eaux agitées.'>Natation</option>\
									</optgroup>\
									<optgroup label='Magique'>\
										<option value='ele_feu' title='Tous vos sorts de feu (y compris les sorts hybrides: feu/terre [magma], feu/air [déflagration],...) ignorent la résistance au feu de votre cible.'>Pyromancie</option>\
								    	<option value='ele_eau' title='Tous vos sorts d\'eau (y compris les sorts hybrides: eau/air [sorts atmosphériques], eau/terre [plantes],...) ignorent la résistance à l\'eau de votre cible.'>Hydromancie</option>\
								    	<option value='ele_air' title='Tous vos sorts d\'air (y compris les sorts hybrides: eau/air [sorts atmosphériques], air/acide [nuage toxique],...) ignorent la résistance à l\'air de votre cible.'>Aéromancie</option>\
								    	<option value='ele_ter' title='Tous vos sorts de Terre (y compris les sorts hybrides: feu/terre [magma], eau/terre [plantes],...) ignorent la résistance à la Terre de votre cible.'>Sismomancie</option>\
								    	<option value='ele_aci' title='Tous vos sorts d\'acide et de poison (y compris les sorts hybrides: eau/acide [mixtures], feu/acide [déflagration],...) ignorent la résistance à l\'acide et et aux poisons de votre cible.'>Solutomancie</option>\
								    	<option value='initi' title='L'entraînement magique des initiés leur confère un savoir-faire poussé sur le lancer de sorts défensifs, accordant plus de protection.'>Initié</option>\
								    	<option value='ami_anim' title='Possède une faculté innée à comprendre le comportement des animaux et à leur inspirer confiance. Dans certains cas, il est même possible de s'en faire des amis.'>Ami des Animaux</option>\
								    	<option value='diver' title='Sait captiver les foules, ou divertir une cible par une performance.'>Divertissant</option>\
								    	<option value='oniro' title='Art d\'interpréter les rêves, et parfois même d\'en tirer des prophéties.'>Oniromancie</option>\
								    	<option value='thaum' title='Un Thaumaturge sait, par sa connaissance du fonctionnement des poisons, causer de légers dommages additionnels sur les cibles empoisonnées.'>Thaumaturge</option>\
								    	<option value='renvo' title='Cette caractéristique accorde une faible chance de renvoyer un sort adverse.'>Renvoi de Sort</option>\
								    	<option value='gueri' title='Suite à un entraînement drastique aux arts de la magie régénératrice, un guérisseur gagne une efficacité accrue sur les sorts de guérison.'>Guérisseur</option>\
									</optgroup>\
									<optgroup label='Intellectuel'>\
										<option value='survi' title='Détient des connaissances solides et utiles en milieu naturel.'>Survie</option>\
										<option value='pickp' title='Grâce à des doigts agiles, les chances de réussite pour voler et dissimuler des objets sont au-dessus de la moyenne.'>Pickpocket</option>\
										<option value='furti' title='Sait se dissimuler dans son environnement.'>Furtif</option>\
										<option value='alert' title='Détecte les pièges plus facilement.'>Alerte</option>\
										<option value='bluff' title='Mentir est une seconde nature, et les chances de réussite en tromperie sont plus élevées.'>Bluff</option>\
										<option value='diplo' title='Brille en situation de crise sociale et sait calmer une chamaillerie.'>Diplomate</option>\
										<option value='intui' title='Ce talent donne une chance supplémentaire de détecter les mensonges et mauvaises intentions.'>Intuition</option>\
										<option value='trapp' title='Sait poser des pièges et traquer une cible bien mieux que le commun des mortels.'>Trappeur</option>\
										<option value='incog' title='Pratique l\'art de se déguiser efficacement et endosser diverses personnalités.'>Incognito</option>\
										<option value='escro' title='Possède une excellente faculté à arnaquer les crédules.'>Escroc</option>\
										<option value='roi_evas' title='Sait se défaire de ses entraves avec plus de facilités.'>Roi de l’évasion</option>\
										<option value='sabot' title='Peut désarmer des pièges simples et saboter des objets mécaniques.'>Saboteur</option>\
									</optgroup>\
							    </select><button type='button' class='saveAction' style='padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>\
							</div>\
							<div class='actionType' id='preset' style='padding:0.25em 1.75em;white-space: nowrap;'>\
			      			<h3>Action:</3><br /><span class='presetList'>"+preset+"</span><br />\
			      				<select id='presetType'>\
							    	<optgroup label='Stockage'>\
							    		<option value='storeAP'>Stocker PA</option>\
										<option value='storeMP'>Stocker PM</option>\
									</optgroup>\
									<optgroup label='Combat'>\
										<option value='perfo'>Perforant</option>\
										<option value='stun'>Assomme</option>\
										<option value='crit'>Critique</option>\
										<option value='init'>Initiative</option>\
									</optgroup>\
							    </select>\
							    <input id='presetVal' type='text' style='display:inline;width:8ch;padding:0;margin:0;z-index:999;' />\
							    <button type='button' class='saveAction' style='padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>\
							</div>\
							<div class='actionType' id='trigger' style='padding:0.25em 1.75em;white-space: nowrap;'>\
			      			<h3>Déclics:</3><br /><span class='triggerList'>"+trigger+"</span><br />\
			      				<input id='triggerVal' type='text' maxlength='16' style='display:inline;width:16ch;padding:0;margin:0;z-index:999;' />\
			      				<button type='button' class='saveAction' style='padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>\
							</div>\
			      		</div>");
						function removeActionEntry(elem) {
							const actionID = elem.parent('.idHolder').attr('id'),
								  actionsArray = actionID.split("&"),
								  key = actionsArray[0],
								  name = actionsArray[1],
								  val = actionsArray[2];
							if (actionsArray[0] == "Bonus" || actionsArray[0] == "Malus" || actionsArray[0] == "Preset") {
								delete itemActions[key][name];
								elem.parent('.idHolder').remove();
							} 
							else if (actionsArray[0] == "Skill" || actionsArray[0] == "Trigger") {
								itemActions[key].splice( itemActions[key].indexOf(name), 1 );
								elem.parent('.idHolder').remove();
							}
						}
						$('span.removeActionEntry').off('click').click(function() {
							removeActionEntry($(this));
						});
						function addNewAction(elem, object, actionType) {
							var key = object[0],
								val = object[1];
							if (actionType == "Bonus" || actionType == "Malus" || actionType == "Preset") {
								if (Array.isArray(itemActions[actionType])) {
									itemActions[actionType] = {};
								}
								itemActions[actionType][key] = val;
								console.log(itemActions);
								if (actionType == "Bonus") {
									elem.closest('#bonus').find('.bonusList').prepend('\
										<span class="flexcont bonusval idHolder" id="'+actionType+'&'+key+'&'+val+'"><span class="tt" id="'+key+'"></span><span class="value" style="height:30px;width:30px;font-size:20px;border-radius:50%;background-color:olivedrab;"> '+val+' </span><span class="removeActionEntry">x</span>\
									');
								}
								else if (actionType == "Malus") {
									elem.closest('#malus').find('.malusList').prepend('\
										<span class="flexcont malusval idHolder" id="'+actionType+'&'+key+'&'+val+'"><span class="tt" id="'+key+'"></span><span class="value" style="height:30px;width:30px;font-size:20px;border-radius:50%;background-color:indianred;"> -'+val+' </span><span class="removeActionEntry">x</span>\
									');
								}
								else if (actionType == "Preset") {
									elem.closest('#preset').find('.presetList').prepend('\
										<span class="flexcont presetval idHolder" id="'+actionType+'&'+key+'&'+val+'"><span class="value" style="background-color:lightsalmon;border:1px solid coral;border-radius:5%;padding:0.25em;">'+key+'</span><span class="value" style="background-color:peachpuff;border:1px solid sandybrown;border-radius:5%;padding:0.25em;"> '+val+' </span><span class="removeActionEntry">x</span></span>\
									');
								}
								buildTooltips();
							} 
							else if (actionType == "Skill" || actionType == "Trigger") {
								var actionArray = itemActions[actionType];
									key = object;
								actionArray.push(key);
								if (actionType == "Skill") {
									elem.closest('#skill').find('.skillList').prepend('\
										<span class="skillval idHolder" id="'+actionType+'&'+key+'"><span class="tt" id="'+key+'"></span><span class="removeActionEntry">x</span></span><br />\
									');
									buildTooltips();
								}
								else if (actionType == "Trigger") {
									elem.closest('#trigger').find('.triggerList').prepend('\
										<span class="triggerval idHolder" id="'+actionType+'&'+key+'">'+key+'<span class="removeActionEntry">x</span></span><br />\
									');
								}
								console.log(itemActions);
							}
							$('span.removeActionEntry').off('click').click(function() {
								removeActionEntry($(this));
							});
						}
						$('.actionType .saveAction').off('click').click(function(){
							var actionType = $(this).closest('.actionType').attr('id'),
								element = $(this);
							if (actionType == "bonus") {
								let stat = $('select#bonusType').val(),
									statVal = $('#bonusVal').val();
									actionType = "Bonus";
								if (statVal && stat) {
									var newBonus = [stat,Number(statVal)];
									addNewAction(element, newBonus, actionType);
								}
							}
							else if (actionType == "malus") {
								let stat = $('select#malusType').val(),
									statVal = $('#malusVal').val();
									actionType = "Malus";
								if (statVal && stat) {
									var newMalus = [stat,Number(statVal)];
									addNewAction(element, newMalus, actionType);
								}
							}
							else if (actionType == "preset") {
								let stat = $('select#presetType').val(),
									statVal = $('#presetVal').val();
									actionType = "Preset";
								if (statVal && stat) {
									var newPreset = [stat,statVal];
									addNewAction(element, newPreset, actionType);
								}
							}
							else if (actionType == "skill") {
								let stat = $('select#skillType').val(),
									actionType = "Skill";
								if (stat) {
									addNewAction(element, stat, actionType);
								}
							}
							else if (actionType == "trigger") {
								let statVal = $('#triggerVal').val();
									actionType = "Trigger";
								if (statVal) {
									addNewAction(element, statVal, actionType);
								}
							}
						});
						$('#editActions .closeBtn').off('click').click(function(){
							console.log('working');
							$.ajax({
					            method: 'POST',
					            url: '{{ route("postItmActions") }}',
					            global: false,
					            data: JSON.stringify({id: selectedItemID, 
									actions: itemActions}), // ISSUE HERE
					            contentType: "application/json",
					            error: function(jqXHR, textStatus, errorThrown) {
					                console.log(jqXHR);
					                console.log(textStatus);
					                console.log(errorThrown);
					                $('#editActions').remove();
					            },
					            success: function (data) { 
					              $('div#changelog').html("Actions enregistrées avec succès!");
					              $('#changelog').fadeIn( 750, function() {
								    $('#changelog').fadeOut(1750);
								  });
								  $('#editActions').remove();
					            }
					        });
						});
			      	})
			      	.fail(function(){
			      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des données!<br />'+route.dir+'</strong></font>');
			    });
			});
			$('table.items tbody').on('dblclick', 'span.value', function(){
				var editSpan = $(this), 
					editDiv = $(this).nextAll('div.edit').first(), 
					valCell = $.trim($(this).data('content')),
					valLgt = valCell.length,
					itemID = Number($(this).closest('tr.itemID').attr('id'));
				// -------------------------
				// 
				// icon selection on the fly
				// 
				// -------------------------
				if ( editDiv.hasClass('icon') ) {
					$('#iconSelector').remove();
					$('body').append('\
					<div id="iconSelector" class="flexvert center" style="background-color:#eee;border:3px ridge #aaa;box-shadow:0 0 5px black;max-width:400px;">\
						<span class="closeBtn">✅</span>\
						<div class="icon-select">\
							<span style="white-space:nowrap;">\
								<select id="itmType">\
									<option value="./img/itm/potion/">Potion</option>\
									<option value="./img/itm/armour/">Armure</option>\
									<option value="./img/itm/weapon/">Arme</option>\
									<option value="./img/itm/trinket/">Accessoire</option>\
									<option value="./img/itm/quest/">Quête</option>\
									<option value="./img/itm/loot/">Butin</option>\
									<option value="./img/itm/key/">Clé</option>\
									<option value="./img/itm/jewel/">Bijou</option>\
									<option value="./img/itm/ingredient/">Ingrédient</option>\
									<option value="./img/itm/food/">Nourriture</option>\
									<option value="./img/itm/drink/">Boisson</option>\
								</select>\
								<span id="subTypeSpan">\
									<select class="itmSubType">\
										<option value="health/" selected>Vie</option>\
										<option value="mana/">Mana</option>\
										<option value="poison/">Poison</option>\
										<option value="stats/">Stats</option>\
										<option value="cure/">Remède</option>\
										<option value="empty/">Vide</option>\
									</select>\
								</span>\
							</span>\
						</div>\
						<div id="iconList" class="flexcont wrap" style="overflow-y:auto;"></div>\
					</div>\
					');
					function getIconSet() {
						let type = $('select#itmType').val();
						let subType = "";
						if ($("select.itmSubType").length) {
							subType = $('select.itmSubType').val();
						}
						let dir = type+subType,
							route = {'dir': dir};
						$.get( '{{ route("getIcons") }}', route)
					      	.done(function(data){
					      		$('div.selectIcon').remove();
					      		data.forEach(function(entry) {
				      				if (entry.includes("png")) {
										$('#iconList').append('<div class="flexbox selectIcon" style="margin:3px;padding:5px;"><img src=".'+dir+entry+'" /></div>');
									}
								});
								$('.selectIcon').click(function(){
									$('.selectIcon').removeClass('selectedIcon');
									$(this).addClass('selectedIcon');
								});
					      	})
					      	.fail(function(){
					      		displayAdminAction('<font color="indianred"><strong>Erreur dans la récupération des icônes!<br />'+route.dir+'</strong></font>');
					      	});
					}
					getIconSet();
					$('#adminview').click(function(){
						$('#iconSelector').remove();
					});
					$('#iconSelector .closeBtn').click(function () {
						let content = $('.selectedIcon>img').attr('src'),
							inputType = "icon";
						$.ajax({
				            method: 'POST',
				            url: '{{ route("editItem") }}',
				            global: false,
				            data: JSON.stringify({item: itemID, 
								type: inputType, 
								content: content}),
				            contentType: "application/json",
				            error: function(jqXHR, textStatus, errorThrown) {
				                console.log(jqXHR);
				                console.log(textStatus);
				                console.log(errorThrown);
				                $('#iconSelector').remove();
				            },
				            success: function (data) { 
				              $('div#changelog').html(JSON.stringify(data.success));
				              $('#changelog').fadeIn( 750, function() {
							    $('#changelog').fadeOut(1750);
							  });
							  $('#adminview').find('tr#'+itemID+' span.value[data-type="icon"] img').attr('src', content);
							  $('#adminview').find('tr#'+itemID+' span.value[data-type="icon"]').attr('data-content', content);
							  $('#iconSelector').remove();
				            }
				        });
					});
					$('select#itmType').change(function(){
						let type = $(this).val();
						switch(type) {
						  case './img/itm/potion/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="health/">Vie</option>\
								<option value="mana/">Mana</option>\
								<option value="poison/">Poison</option>\
								<option value="stats/">Stats</option>\
								<option value="cure/">Remède</option>\
								<option value="empty/">Vide</option>\
							</select>';
						    break;
						  case './img/itm/armour/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="chest/heavy/">Plastron (Lourd)</option>\
								<option value="chest/light/">Plastron (Léger)</option>\
								<option value="chest/vlight/">Vêtement</option>\
								<option value="hands/heavy/">Gants (Lourds)</option>\
								<option value="hands/light/">Gants (Légers)</option>\
								<option value="hands/vlight/">Mains</option>\
								<option value="head/heavy/">Casque (Lourd)</option>\
								<option value="head/light/">Casque (Léger)</option>\
								<option value="head/vlight/">Tête</option>\
								<option value="legs/heavy/">Chausses (Lourdes)</option>\
								<option value="legs/light/">Chausses (Légères)</option>\
								<option value="legs/vlight/">Chaussures</option>\
								<option value="waist/">Ceinture</option>\
							</select>';
						    break;
						  case './img/itm/weapon/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="axe/">Hache</option>\
								<option value="battleaxe/">Hache d\'Armes</option>\
								<option value="bow/">Arc / Arbalète</option>\
								<option value="club/">Matraque</option>\
								<option value="mace/">Masse</option>\
								<option value="dagger/">Dague</option>\
								<option value="fist/">Poing</option>\
								<option value="hammer/">Marteau</option>\
								<option value="instrument/">Instrument</option>\
								<option value="longsword/">Épée Longue</option>\
								<option value="shortsword/">Épée Courte</option>\
								<option value="shield/">Bouclier</option>\
								<option value="shoot/">Distance</option>\
								<option value="spear/">Lance</option>\
								<option value="staff/">Bâton</option>\
								<option value="stick/">Baguette</option>\
							</select>';
						    break;
						  case './img/itm/trinket/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="artefact/">Artéfact</option>\
								<option value="effigy/">Effigie</option>\
								<option value="epic/">Épique</option>\
								<option value="jewel/">Bijou</option>\
								<option value="scroll/">Parchemin</option>\
								<option value="spellbook/">Grimoire</option>\
							</select>';
						    break;
						  case './img/itm/loot/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="drops/">Combat</option>\
								<option value="feathers/">Plume</option>\
								<option value="fish/">Poisson</option>\
								<option value="mine/">Minage</option>\
								<option value="precious/">Précieux</option>\
							</select>';
						    break;
						  case './img/itm/jewel/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="neck/">Collier</option>\
								<option value="ring/">Anneau</option>\
								<option value="wrist/">Bracelet</option>\
							</select>';
						    break;
						  case './img/itm/ingredient/':
						  	$('#getIconSet').css({'width' : 'auto'});
						    subTypeDom = '\
						    <select class="itmSubType">\
								<option value="animal/">Animal</option>\
								<option value="fruit/">Fruit</option>\
								<option value="mushroom/">Champignon</option>\
								<option value="plant/">Plante</option>\
								<option value="powder/">Poudre</option>\
							</select>';
						    break;
						  default:
						    subTypeDom = '';
						    $('#getIconSet').css({
							   'width' : '100%',
							   'border-radius' : '3px'
							});
						} 
						$('span#subTypeSpan').html(subTypeDom);
						getIconSet();
						$('.itmSubType').change(function(){
							getIconSet();
						});
					});
					$('.itmSubType').change(function(){
						getIconSet();
					});
				// ----------------------------
				// 
				// classes selection on the fly
				// 
				// ----------------------------
				} 
				else if ( editDiv.hasClass('classes') ) {
					$('#classesSelector').remove();
					$('body').append('\
					<div id="classesSelector" class="flexvert center" style="background-color:#eee;border:3px ridge #aaa;box-shadow:0 0 5px black;max-width:400px;">\
						<span class="closeBtn">✅</span>\
						<div class="classes-select">\
							<h3 style="text-align:center;">Cet objet est utilisable par les classes:</h3>\
							<form id="selectClasses">\
								<span class="flexcont wrap center" style="font-size:16px;line-height:0.5;">\
									<span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="assa" type="checkbox" name="classes[]" value="assa"><label for="assa" style="vertical-align:middle;"><img src="../img/icons/classes/assa.png" style="vertical-align:middle;"> Assassin</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="barb" type="checkbox" name="classes[]" value="barb"><label for="barb" style="vertical-align:middle;"><img src="../img/icons/classes/barb.png" style="vertical-align:middle;"> Barbare</label>\
								    </span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="bard" type="checkbox" name="classes[]" value="bard"><label for="bard" style="vertical-align:middle;"><img src="../img/icons/classes/bard.png" style="vertical-align:middle;"> Barde</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="cler" type="checkbox" name="classes[]" value="cler"><label for="cler" style="vertical-align:middle;"><img src="../img/icons/classes/cler.png" style="vertical-align:middle;"> Clerc</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="drui" type="checkbox" name="classes[]" value="drui"><label for="drui" style="vertical-align:middle;"><img src="../img/icons/classes/drui.png" style="vertical-align:middle;"> Druide</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="guer" type="checkbox" name="classes[]" value="guer"><label for="guer" style="vertical-align:middle;"><img src="../img/icons/classes/guer.png" style="vertical-align:middle;"> Guerrier</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="magi" type="checkbox" name="classes[]" value="magi"><label for="magi" style="vertical-align:middle;"><img src="../img/icons/classes/magi.png" style="vertical-align:middle;"> Magicien</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="moin" type="checkbox" name="classes[]" value="moin"><label for="moin" style="vertical-align:middle;"><img src="../img/icons/classes/moin.png" style="vertical-align:middle;"> Moine</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="pala" type="checkbox" name="classes[]" value="pala"><label for="pala" style="vertical-align:middle;"><img src="../img/icons/classes/pala.png" style="vertical-align:middle;"> Paladin</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="roub" type="checkbox" name="classes[]" value="roub"><label for="roub" style="vertical-align:middle;"><img src="../img/icons/classes/roub.png" style="vertical-align:middle;"> Roublard</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="sham" type="checkbox" name="classes[]" value="sham"><label for="sham" style="vertical-align:middle;"><img src="../img/icons/classes/sham.png" style="vertical-align:middle;"> Shaman</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="sorc" type="checkbox" name="classes[]" value="sorc"><label for="sorc" style="vertical-align:middle;"><img src="../img/icons/classes/sorc.png" style="vertical-align:middle;"> Ensorceleur</label>\
									</span><span class="flexbox normagin" style="padding: 0 8px 0 0;">\
									    <input class="selectClasses" id="vaga" type="checkbox" name="classes[]" value="vaga"><label for="vaga" style="vertical-align:middle;"><img src="../img/icons/classes/vaga.png" style="vertical-align:middle;"> Vagabond</label>\
									</span>\
								</span>\
							</form>\
						</div>\
						<div id="classesList" class="flexcont wrap" style="overflow-y:auto;"></div>\
					</div>\
					');
					// define shtuff
					let alreadyThere = $(this).closest('span.value[data-type="classes"]').attr('data-content'),
						domElems = $('.selectClasses');
					// check the box of already present classes
					function checkTheBoxesM8(element){
						if (alreadyThere.includes(element.attr('id'))) {
					  		element.prop('checked', true);
					  	}
					}
					for (var i = 0, len = domElems.length; i < len; i++) {
					  checkTheBoxesM8(domElems.eq(i));
					}
					$('.selectClasses:checked').parent('.flexbox').css('background-color', '#776c52');
					$('.selectClasses').click(function(){
						$('.selectClasses').parent('.flexbox').css('background-color', '#e0cca3');
						$('.selectClasses:checked').parent('.flexbox').css('background-color', '#776c52');
					});
					$('#adminview').click(function(){
						$('#classesSelector').remove();
					});
					$('#classesSelector .closeBtn').click(function () {
						var inputType = "classes",
							content = [];
						$('.selectClasses:checked').each(function() {
							content.push( $(this).attr('value') );
						});
						content = content.toString();
						$.ajax({
				            method: 'POST',
				            url: '{{ route("editItem") }}',
				            global: false,
				            data: JSON.stringify({item: itemID, 
								type: inputType, 
								content: content}),
				            contentType: "application/json",
				            error: function(jqXHR, textStatus, errorThrown) {
				                console.log(jqXHR);
				                console.log(textStatus);
				                console.log(errorThrown);
				                $('#classesSelector').remove();
				            },
				            success: function (data) { 
				              $('div#changelog').html(JSON.stringify(data.success));
				              $('#changelog').fadeIn( 750, function() {
							    $('#changelog').fadeOut(1750);
							  });
							  $('#adminview').find('tr#'+itemID+' span.value[data-type="classes"]').attr('data-content', content);
							  let contentString = "";
							  content = content.split(",");
							  for (var i = content.length - 1; i >= 0; i--) {
							  	contentString += '<img src="../img/icons/classes/'+content[i]+'.png" height="24" width="24" /> ';
							  }
							  $('#adminview').find('tr#'+itemID+' span.value[data-type="classes"]').html(contentString);
							  $('#classesSelector').remove();
				            }
				        });
					});
				//-------------------------------------
				// 
				// type selection window & auto-refresh
				// 
				//-------------------------------------
				} 
				else if ( editDiv.hasClass('type') ) {
					editSpan.hide();
					editDiv.show().html('\
					<div class="input-group" style="display:inline;white-space:nowrap;">\
						<form id="currentInput">\
							<input type="radio" name="type" value="equip" title="Peut être équipé par vos héros" > Équiper<br>\
							<input type="radio" name="type" value="use" title="Peut être utilisé" > Utiliser<br>\
							<input type="radio" name="type" value="trigger" title="Lance un événement" > Déclic<br>\
							<input type="radio" name="type" value="passive" title="Ne fait rien sous cette forme" > Passif\
						</form>\
						<span class="input-group-btn">\
							<button type="button" id="save" style="padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;">✔</button>\
							<button type="button" id="close" style="padding:0;margin:0;background:Salmon;border-radius:15%;border:1px solid #333;z-index:999;">↩</button>\
					  	</span>\
					</div>\
					');
				} 
				else if ( editDiv.hasClass('descr') ) {
					editSpan.hide();
					editDiv.show().html('\
					<div class="input-group" style="display:inline;">\
					  <textarea cols="10" rows="5" maxlength="255" id="currentInput" style="display:inline;width:'+(valLgt+1)+'ch;padding:0;margin:0;z-index:999;">'+valCell+'</textarea>\
					  <span class="input-group-btn">\
					    <button type="button" id="save" style="padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;">✔</button>\
					    <button type="button" id="close" style="padding:0;margin:0;background:Salmon;border-radius:15%;border:1px solid #333;z-index:999;">↩</button>\
					  </span>\
					</div>\
					');
				} 
				else {
				// -----------------
				// 
				// regular behaviour
				// 
				// -----------------
				editSpan.hide();
				editDiv.show().html('\
					<div class="input-group" style="display:inline;white-space:nowrap;">\
					  <input id="currentInput" type="text" value="'+valCell+'" style="display:inline;width:'+(valLgt+1)+'ch;padding:0;margin:0;z-index:999;" />\
					  <span class="input-group-btn">\
					    <button type="button" id="save" style="padding:0;margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;">✔</button>\
					    <button type="button" id="close" style="padding:0;margin:0;background:Salmon;border-radius:15%;border:1px solid #333;z-index:999;">↩</button>\
					  </span>\
					</div>');
				}
				// set control on input + remove all other fields
				$(this).parent().find('input').focus();
				$(this).closest('tbody').find('.editable').not($(this).closest('.editable')).each(function(){
					$(this).find('span.value').show();
					$(this).find('div.edit').hide();
				});
			}); 
			//------------------------------
			// 
			// define close & save behaviour
			// 
			//------------------------------
			let subtypeDiv, typeValue = "";
			function changeSubType(elem) {
            	subtypeDiv = elem.closest('tr').find('td.subtype>.editable>span.value');
            	if (typeValue == "") {
            		typeValue = $('span.value[data-type="type"]').data('content');
            	}
            	switch(typeValue) {
				    case 'equip':
					    subtypeDiv.html('\
					    	<select class="itmType_SubType">\
					    		<option selected="true" disabled="disabled">\
					    			INDÉFINI!\
					    		</option>\
					    		<optgroup label="Armure">\
									<option value="chest_heavy" title="Objet Lourd">Cuirasse</option>\
									<option value="chest_light" title="Objet de Poids Moyen">Plastron</option>\
									<option value="chest_vlight" title="Objet Léger">Vêtement</option>\
									<option value="hands_heavy" title="Objet Lourd">Mitons</option>\
									<option value="hands_light" title="Objet de Poids Moyen">Gants</option>\
									<option value="hands_vlight" title="Objet Léger">Mains</option>\
									<option value="head_heavy" title="Objet Lourd">Heaume</option>\
									<option value="head_light" title="Objet de Poids Moyen">Casque</option>\
									<option value="head_vlight" title="Objet Léger">Tête</option>\
									<option value="legs_heavy" title="Objet Lourd">Solerets</option>\
									<option value="legs_light" title="Objet de Poids Moyen">Chausses</option>\
									<option value="legs_vlight" title="Objet Léger">Chaussons</option>\
									<option value="waist">Ceinture</option>\
								</optgroup>\
								<optgroup label="Arme">\
									<option value="shield">Bouclier</option>\
									<option value="one_handed">Une Main</option>\
									<option value="two_handed" title="Objet Lourd">Deux Mains</option>\
								</optgroup>\
								<optgroup label="Accessoire">\
									<option value="trinket">Divers</option>\
									<option value="classItem">Classe</option>\
									<option value="neck">Collier</option>\
									<option value="ring">Anneau</option>\
									<option value="wrist">Bracelet</option>\
								</optgroup>\
							</select>\
				    	');
				    break;
				    case 'use':
					    subtypeDiv.html('\
					    	<select class="itmType_SubType">\
					    		<option selected="true" disabled="disabled">\
					    			INDÉFINI!\
					    		</option>\
								<option value="potion">Potion</option>\
								<option value="scroll">Parchemin</option>\
								<option value="food">Nourriture</option>\
								<option value="drink">Boisson</option>\
								<option value="misc">Divers</option>\
							</select>\
				    	');
				    break;
				    case 'trigger':
				    	subtypeDiv.html('\
					    	<select class="itmType_SubType">\
					    		<option selected="true" disabled="disabled">\
					    			INDÉFINI!\
					    		</option>\
								<option value="tool">Outil</option>\
								<option value="quest">Quête</option>\
								<option value="misc">Divers</option>\
							</select>\
				    	');
				    break;
					case 'passive':
						subtypeDiv.html('\
					    	<select class="itmType_SubType">\
					    		<option selected="true" disabled="disabled">\
					    			INDÉFINI!\
					    		</option>\
								<option value="ingredient">Ingrédient</option>\
								<option value="loot">Butin</option>\
								<option value="misc">Divers</option>\
							</select>\
				    	');
					break;
					default:
						subtypeDiv.html('\
					    	<select class="itmType_SubType">\
					    		<option selected="true" disabled="disabled">\
					    			INDÉFINI!\
					    		</option>\
							</select>\
				    	');
				} 
            }
			function editItemClose(elem) {
				elem.closest('td').find('span.value').show();
				elem.closest('div.edit').hide();
			}
			function sendEditItemSave(elem) {
				let itemID = Number(elem.closest('tr.itemID').attr('id')),
					editDiv = elem.closest('.editable').find('div.edit').first(), inputType, 
					hiddenValueSpan = elem.closest('.editable').find('span.value:hidden').data('type');
					if (hiddenValueSpan) {
						inputType = String(elem.closest('.editable').find('span.value:hidden').data('type'));
					} 
					else if (inputType === undefined) {
						inputType = String(elem.parent('span.value').data('type'));
					}
				// special behaviour for TYPE
				let getValueInput;
				if ( editDiv.hasClass('type') ) {
					getValueInput = String($('input[name=type]:checked').attr('value'));
				} 
				else if ( editDiv.hasClass('subtype') ) {
					getValueInput = elem.find(":selected").val();
				} 
				else if ( editDiv.hasClass('descr') ) {
					getValueInput = String($('div.edit.descr').find('textarea').val());
				} 
				else {
					getValueInput = String(elem.closest('div').find('input').val());
				}
				// if data-name is allowed (prefiltering before even sending to backend)
				if (inputType === "name" || inputType === "level" || inputType === "icon" || inputType === "price" || inputType === "weight" || inputType === "classes" || inputType === "descr" || inputType === "type" || inputType === "subtype" || inputType === "action") {
					// send info as AJAX
					$.ajax({
			            method: 'POST',
			            url: '{{ route("editItem") }}',
			            global: false,
			            data: JSON.stringify({item: itemID, 
							type: inputType, 
							content: getValueInput}),
			            contentType: "application/json",
			            error: function(jqXHR, textStatus, errorThrown) {
			                console.log(jqXHR);
			                console.log(textStatus);
			                console.log(errorThrown);
			            },
			            success: function (data) { 
			            	if (data.success) {
								$('div#changelog').html(JSON.stringify(data.success));
								$('#changelog').fadeIn( 750, function() {
								$('#changelog').fadeOut(1750);
								});
							}
							if (inputType == 'type') {
								$('tr#'+itemID+' span.value[data-type="type"]').html(data);
								$('tr#'+itemID+' span.value[data-type="type"]').attr('data-content', getValueInput);
								typeValue = getValueInput;
								changeSubType($('tr#'+itemID+' span.value[data-type="type"]'));
							} 
							else if (inputType == 'subtype') {
								$('tr#'+itemID+'>select.itmType_SubType>option[value='+getValueInput+']').prop('selected', true);
							}
			            }
			        });
				// and change front content
					if (elem.parent().is('h2.editable')) {
						elem.closest('span.nestedImg').find('span.value').text(getValueInput);
					} 
					else if ( inputType == 'type' ||  inputType == 'subtype') {
						// do nothing
					} 
					else {
						elem.closest('.editable').find('span.value').text(getValueInput);
					}
					//print changes
					elem.closest('td').find('span.value').show();
					elem.closest('div.edit').hide();
				//else cancel
				} 
				else {
					alert("Eh! Que tentez-vous de faire là? :O\n\nCette ressource n'est pas éditable pour une raison, vous risquez bien de faire des bêtises...");
					location.reload(true);
				}
			}
			$('#mainAdminContentsView').off("mousedown").on('mousedown', 'button#close', function(){
				editItemClose($(this));
			});
			$('#mainAdminContentsView').off("click").on('click', 'button#save', function(){
				sendEditItemSave($(this));
			});
			$('#mainAdminContentsView').off("keypress").on('keypress', 'input#currentInput', function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    sendEditItemSave($(this));
                }
                if (keycode == '27') {
                    editItemClose($(this));
                }
            });
            // listening for changes on subtype and saving accordingly
            $('td.subtype').off("change").on('change', 'select.itmType_SubType', function(){
				sendEditItemSave($(this));
			});
		}
		$(document).ready(editItemTables);
		$(document).ajaxComplete(editItemTables);
	</script>
</span>