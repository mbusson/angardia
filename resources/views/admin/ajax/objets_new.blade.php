<div id="itemnew" style="border-radius: 1em;border:1px solid #999;background-color: #eee;min-width: 100%;">
	<form action='{{ route("makeNewItem") }}'>
		<div class="flexcont wrap around">
			<div class="flexbox">
				<div style="white-space: nowrap;margin:1em;">
					<h1 style='display:inline;margin:0;'>Nom</h1>
					<input id='name' name="name" type='text' pattern="[\wÀ-ÿ '-]{4,32}"/>
				</div>
				<div style="white-space: nowrap;margin:1em;">
					<h1 style='display:inline;margin:0;'>Icône</h1>
					<span id="icon" data-type="icon" data-content="../img/itm/potion/health/89.png" style="cursor:pointer;"><img src="../img/itm/potion/health/89.png" height="24" width="24" /></span>
					<input name="icon" type="hidden" value="">
				</div>
				<div style="white-space: nowrap;margin:1em;">
					<h1 style='display:inline;margin:0;'>Niveau</h1>
					<input id='level' name="level" type='text' style="width:3ch;" pattern="[0-9]{1,3}"/>
				</div>
				<div style="white-space: nowrap;margin:1em;">
					<h1 style='display:inline;margin:0;'>Prix Moyen</h1>
					<input id='price' name="price" type='text' style="width:7ch;" pattern="[0-9]+"/>
				</div>
				<div style="white-space: nowrap;margin:1em;">
					<h1 style='display:inline;margin:0;'>Poids</h1>
					<input id='weight' name="weight" type='text' style="width:3ch;" pattern="[0-9]+"/>
				</div>
				<div style="margin:1em 0;display:flex;flex-direction:column;justify-content:center;text-align:center;align-items:center;align-content:center;width: 100%;">
					<h1 style='width: 11ch;margin:0;left:50%;'>Description</h1>
					<textarea name="descr" cols="32" rows="8" maxlength="255" id="currentInput" style="display:inline;margin:0;" placeholder="Caractères autorisés: Lettres, accents, - ! ? . , ; : ( ) ' &quot;"></textarea>
				</div>
			</div>
			<div class="flexbox">
				<div style="white-space: nowrap;margin:1em;">
					<h1 style='display:inline;margin:0;'>Cet objet est utilisable par les classes:</h1><br /><br />
					<span style="font-size:16px;line-height:0.5;">
						<span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="assa" type="checkbox" name="classes[]" value="assa"><label for="assa" style="vertical-align:middle;"><img src="../img/icons/classes/assa.png" style="vertical-align:middle;"> Assassin</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="barb" type="checkbox" name="classes[]" value="barb"><label for="barb" style="vertical-align:middle;"><img src="../img/icons/classes/barb.png" style="vertical-align:middle;"> Barbare</label>
					    </span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="bard" type="checkbox" name="classes[]" value="bard"><label for="bard" style="vertical-align:middle;"><img src="../img/icons/classes/bard.png" style="vertical-align:middle;"> Barde</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="cler" type="checkbox" name="classes[]" value="cler"><label for="cler" style="vertical-align:middle;"><img src="../img/icons/classes/cler.png" style="vertical-align:middle;"> Clerc</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="drui" type="checkbox" name="classes[]" value="drui"><label for="drui" style="vertical-align:middle;"><img src="../img/icons/classes/drui.png" style="vertical-align:middle;"> Druide</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="guer" type="checkbox" name="classes[]" value="guer"><label for="guer" style="vertical-align:middle;"><img src="../img/icons/classes/guer.png" style="vertical-align:middle;"> Guerrier</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="magi" type="checkbox" name="classes[]" value="magi"><label for="magi" style="vertical-align:middle;"><img src="../img/icons/classes/magi.png" style="vertical-align:middle;"> Magicien</label><br />
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="moin" type="checkbox" name="classes[]" value="moin"><label for="moin" style="vertical-align:middle;"><img src="../img/icons/classes/moin.png" style="vertical-align:middle;"> Moine</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="pala" type="checkbox" name="classes[]" value="pala"><label for="pala" style="vertical-align:middle;"><img src="../img/icons/classes/pala.png" style="vertical-align:middle;"> Paladin</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="roub" type="checkbox" name="classes[]" value="roub"><label for="roub" style="vertical-align:middle;"><img src="../img/icons/classes/roub.png" style="vertical-align:middle;"> Roublard</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="sham" type="checkbox" name="classes[]" value="sham"><label for="sham" style="vertical-align:middle;"><img src="../img/icons/classes/sham.png" style="vertical-align:middle;"> Shaman</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="sorc" type="checkbox" name="classes[]" value="sorc"><label for="sorc" style="vertical-align:middle;"><img src="../img/icons/classes/sorc.png" style="vertical-align:middle;"> Ensorceleur</label>
						</span><span style="padding: 0 8px 0 0;">
						    <input class="selectClasses" id="vaga" type="checkbox" name="classes[]" value="vaga"><label for="vaga" style="vertical-align:middle;"><img src="../img/icons/classes/vaga.png" style="vertical-align:middle;"> Vagabond</label>
						</span>
						<input name="classesList" type="hidden" value=""><br /><br />
						<input class="ui-button selectAllClasses" type="button" value="Tout sélectionner" style="padding:0.25em;margin:0.25em;"><input class="ui-button unselectAllClasses" type="button" value="Tout dé-sélectionner" style="padding:0.25em;margin:0.25em;"><br />
					</span>
				</div>
				<div class="flexcont wrap around" style="font-size:125%;">
					<div class="flexbox">
						<div style="white-space: nowrap;margin:1em;">
							<h1 style='display:inline;margin:0;'>Type:</h1><br /><br />
							<span id="itmType" data-type="type">
			          			<input type="radio" name="type" value="equip" title="Peut être équipé par vos héros" > Équiper<br />
								<input type="radio" name="type" value="use" title="Peut être utilisé" > Utiliser<br />
								<input type="radio" name="type" value="trigger" title="Lance un événement" > Déclic<br />
								<input type="radio" name="type" value="passive" title="Ne fait rien sous cette forme" > Passif<br />
							</span>
						</div>
					</div>
					<div class="flexbox">
						<div style="white-space: nowrap;margin:1em;">
							<h1 style='display:inline;margin:0;'>Sous-type:</h1><br /><br />
							<span id="subtype">
							</span>
							<input name="subtype" type="hidden" value="">
						</div>
					</div>
				</div>
			</div>
			<div class="flexbox">
				<h1 style='display:inline;margin:0;'>Actions:</h1><br /><br />
				<div class='flexcont wrap' style='margin:0;font-size:80%;'>
	      			<div class='flexbox actionType' id='bonus' style='padding:0.25em 1.5em;white-space: nowrap;'>
	      				<h3>Bonus:</3><br /><span class='bonusList'></span><br />
	      				<select id='bonusType'>
							<option value='ap'>Pts Action</option>
							<option value='ap_max'>Max. PA</option>
							<option value='ap_regen'>Régen. PA</option>
							<option value='mp'>Pts Mouvement</option>
							<option value='mp_max'>Max. PM</option>
							<option value='mp_regen'>Régen. PM</option>
							<option value='df'>Faveurs Divines</option>
							<option value='df_max'>Max. FD</option>
							<option value='df_regen'>Régen. FD</option>
							<option value='hp'>Pts Vie</option>
							<option value='hp_max'>Max. Vie</option>
							<option value='hp_regen'>Régen. Vie</option>
							<option value='mana'>Pts Mana</option>
							<option value='mana_max'>Max. Mana</option>
							<option value='mana_regen'>Régen. Mana</option>
							<option value='forc'>Force</option>
							<option value='dext'>Dextérité</option>
							<option value='endu'>Endurance</option>
							<option value='defe'>Défense</option>
							<option value='inte'>Intelligence</option>
							<option value='perc'>Perception</option>
							<option value='chan'>Chance</option>
							<option value='chrm'>Charme</option>
							<option value='sage'>Sagesse</option>
							<option value='volo'>Volonté</option>
							<option value='ling'>Linguistique</option>
							<option value='capa'>Portage</option>
						</select>
						<input id='bonusVal' type='text' maxlength='3' style='display:inline;width:3ch;margin:0;z-index:999;' />
						<button type='button' class='saveAction' style='margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>
	      			</div>
	      			<div class='flexbox actionType' id='malus' style='padding:0.25em 1.5em;white-space: nowrap;'>
	      				<h3>Malus:</3><br /><span class='malusList'></span><br />
	      				<select id='malusType'>
							<option value='ap'>Pts Action</option>
							<option value='ap_max'>Max. PA</option>
							<option value='ap_regen'>Régen. PA</option>
							<option value='mp'>Pts Mouvement</option>
							<option value='mp_max'>Max. PM</option>
							<option value='mp_regen'>Régen. PM</option>
							<option value='df'>Faveurs Divines</option>
							<option value='df_max'>Max. FD</option>
							<option value='df_regen'>Régen. FD</option>
							<option value='hp'>Pts Vie</option>
							<option value='hp_max'>Max. Vie</option>
							<option value='hp_regen'>Régen. Vie</option>
							<option value='mana'>Pts Mana</option>
							<option value='mana_max'>Max. Mana</option>
							<option value='mana_regen'>Régen. Mana</option>
							<option value='forc'>Force</option>
							<option value='dext'>Dextérité</option>
							<option value='endu'>Endurance</option>
							<option value='defe'>Défense</option>
							<option value='inte'>Intelligence</option>
							<option value='perc'>Perception</option>
							<option value='chan'>Chance</option>
							<option value='chrm'>Charme</option>
							<option value='sage'>Sagesse</option>
							<option value='volo'>Volonté</option>
							<option value='ling'>Linguistique</option>
						</select>
						<input id='malusVal' type='text' maxlength='3' style='display:inline;width:3ch;margin:0;z-index:999;' />
						<button type='button' class='saveAction' style='margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>
	      			</div>
	      			<div class='flexbox actionType' id='skill' style='padding:0.25em 1.5em;white-space: nowrap;'>
	      				<h3>Talent:</3><br /><span class='skillList'></span><br />
	      				<select id='skillType'>
					    	<optgroup label='Physique'>
					    		<option value='athle'>Athlète</option>
								<option value='acrob'>Acrobatie</option>
								<option value='resis'>Résistant</option>
								<option value='voyag'>Voyageur</option>
								<option value='charg'>Charge</option>
								<option value='ambid'>Ambidextre</option>
								<option value='pre_soin'>Premiers Soins</option>
								<option value='equit'>Équitation</option>
								<option value='balay'>Balayage</option>
								<option value='intim'>Intimidation</option>
								<option value='escal'>Escalade</option>
								<option value='natat'>Natation</option>
							</optgroup>
							<optgroup label='Magique'>
								<option value='ele_feu'>Pyromancie</option>
						    	<option value='ele_eau'>Hydromancie</option>
						    	<option value='ele_air'>Aéromancie</option>
						    	<option value='ele_ter'>Sismomancie</option>
						    	<option value='ele_aci'>Solutomancie</option>
						    	<option value='initi'>Initié</option>
						    	<option value='ami_anim'>Ami des Animaux</option>
						    	<option value='diver'>Divertissant</option>
						    	<option value='oniro'>Oniromancie</option>
						    	<option value='thaum'>Thaumaturge</option>
						    	<option value='renvo'>Renvoi de Sort</option>
						    	<option value='gueri'>Guérisseur</option>
							</optgroup>
							<optgroup label='Intellectuel'>
								<option value='survi'>Survie</option>
								<option value='pickp'>Pickpocket</option>
								<option value='furti'>Furtif</option>
								<option value='alert'>Alerte</option>
								<option value='bluff'>Bluff</option>
								<option value='diplo'>Diplomate</option>
								<option value='intui'>Intuition</option>
								<option value='trapp'>Trappeur</option>
								<option value='incog'>Incognito</option>
								<option value='escro'>Escroc</option>
								<option value='roi_evas'>Roi de l’évasion</option>
								<option value='sabot'>Saboteur</option>
							</optgroup>
					    </select><button type='button' class='saveAction' style='margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>
					</div>
					<div class='flexbox actionType' id='preset' style='padding:0.25em 1.5em;white-space: nowrap;'>
	      				<h3>Action:</3><br /><span class='presetList'></span><br />
	      				<select id='presetType'>
					    	<optgroup label='Stockage'>
					    		<option value='storeAP'>Stocker PA</option>
								<option value='storeMP'>Stocker PM</option>
							</optgroup>
							<optgroup label='Combat'>
								<option value='perfo'>Perforant</option>
								<option value='stun'>Assomme</option>
								<option value='crit'>Critique</option>
							</optgroup>
					    </select>
					    <input id='presetVal' type='text' style='display:inline;width:8ch;margin:0;z-index:999;' />
					    <button type='button' class='saveAction' style='margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>
					</div>
					<div class='flexbox actionType' id='trigger' style='padding:0.25em 1.5em;white-space: nowrap;'>
	      				<h3>Déclics:</3><br /><span class='triggerList'></span><br />
	      				<input id='triggerVal' type='text' maxlength='16' style='display:inline;width:16ch;margin:0;z-index:999;' />
	      				<button type='button' class='saveAction' style='margin:0;background:OliveDrab;border-radius:15%;border:1px solid #333;z-index:999;'>✔</button>
					</div>
					<input name="actions" type="hidden" value="">
	      		</div>
			</div>
			<input class="ui-button ui-widget ui-corner-all" type="submit" value="Enregistrer un nouvel objet" style="padding:1em;margin:1em;font-size:125%;">
		</div>
	</form>
</div>
<script>
// ----------------------------
// 
//        TYPE > SUBTYPE
// 
// ----------------------------
$('span#itmType[data-type="type"]').change(function(){
	var typeValue = $(this).find('input[type="radio"]:checked').val(),
		subTypeDiv = $('#subtype').first();
	switch(typeValue) {
	    case 'equip':
		    subTypeDiv.html('\
		    	<select class="itmType_itmSubType">\
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
						<option value="one_handed">Une Main</option>\
						<option value="two_handed" title="Objet Lourd">Deux Mains</option>\
						<option value="shield">Bouclier</option>\
					</optgroup>\
					<optgroup label="Accessoire">\
						<option value="trinket">Accessoire</option>\
						<option value="classItem">Classe</option>\
						<option value="neck">Collier</option>\
						<option value="ring">Anneau</option>\
						<option value="wrist">Bracelet</option>\
					</optgroup>\
				</select>\
	    	');
	    break;
	    case 'use':
		    subTypeDiv.html('\
		    	<select class="itmType_itmSubType">\
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
	    	subTypeDiv.html('\
		    	<select class="itmType_itmSubType">\
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
			subTypeDiv.html('\
		    	<select class="itmType_itmSubType">\
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
			subTypeDiv.html('\
		    	<select class="itmType_itmSubType">\
		    		<option selected="true" disabled="disabled">\
		    			INDÉFINI!\
		    		</option>\
				</select>\
	    	');
	}
	$('select.itmType_itmSubType').change(function(){
		var newSTVal = $(this).val();
		$('input[name="subtype"]').attr('value', newSTVal);
		console.log($('input[name="subtype"]').attr('value'));
	});
});
// -------------------------
// 
// icon selection on the fly
// 
// -------------------------
$('span#icon').click(function() {
	console.log('clic!');
	$('#iconSelector').remove();
	$('body').append('\
	<div id="iconSelector" class="flexvert center" style="background-color:#eee;border:3px ridge #aaa;box-shadow:0 0 5px black;max-width:400px;">\
		<span class="closeBtn">✅</span>\
		<div class="icon-select">\
			<span style="white-space:nowrap;">\
				<select id="iconType">\
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
					<select class="iconSubType">\
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
		let type = $('select#iconType').val();
		let subType = "";
		if ($("select.iconSubType").length) {
			subType = $('select.iconSubType').val();
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
	$('#adminview').mousedown(function(){
		$('#iconSelector').remove();
	});
	$('#iconSelector .closeBtn').click(function () {
		let content = $('.selectedIcon>img').attr('src');
		$('input[name="icon"]').attr('value', content);
		$('span#icon img').attr('src', content);
		$('#iconSelector').remove();
	});
	$('select#iconType').change(function(){
		let type = $(this).val();
		switch(type) {
		  case './img/itm/potion/':
		  	$('#getIconSet').css({'width' : 'auto'});
		    subTypeDom = '\
		    <select class="iconSubType">\
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
		    <select class="iconSubType">\
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
		    <select class="iconSubType">\
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
		    <select class="iconSubType">\
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
		    <select class="iconSubType">\
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
		    <select class="iconSubType">\
				<option value="neck/">Collier</option>\
				<option value="ring/">Anneau</option>\
				<option value="wrist/">Bracelet</option>\
			</select>';
		    break;
		  case './img/itm/ingredient/':
		  	$('#getIconSet').css({'width' : 'auto'});
		    subTypeDom = '\
		    <select class="iconSubType">\
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
		$('.iconSubType').change(function(){
			getIconSet();
		});
	});
	$('.iconSubType').change(function(){
		getIconSet();
	});
});
// ----------------------------
// 
// classes selection on the fly
// 
// ----------------------------
$('.selectAllClasses').click(function(){
	$('.selectClasses').prop('checked', true);
});
$('.unselectAllClasses').click(function(){
	$('.selectClasses').prop('checked', false);
});
$('.selectClasses').click(function(){
	$('.selectClasses').parent('.flexbox').css('background-color', '#e0cca3');
	$('.selectClasses:checked').parent('.flexbox').css('background-color', '#776c52');
	var arr = [];
	$(".selectClasses").each(function(){
	   if($(this).is(":checked")){
		 arr.push($(this).val());
	   }
	});
	var vals = arr.join(",");
	$('input[name="classesList"]').attr('value', vals);
});
// ----------------------------
// 
//       action edition
// 
// ----------------------------
if (itemActions == null) {
	var itemActions = {"Bonus": {}, "Malus": {}, "Skill": [], "Preset": {}, "Trigger": []};
}
else {
	// failsafe for cached var
	itemActions = {"Bonus": {}, "Malus": {}, "Skill": [], "Preset": {}, "Trigger": []};
}
console.log(itemActions);
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
		itemActions[actionType][key] = val;
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
	}
	$('span.removeActionEntry').off('click').click(function() {
		removeActionEntry($(this));
	});
}
// send save instruction to function
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
	// save new itemActions to the form
	$('input[name="actions"]').attr('value', JSON.stringify(itemActions));
	console.log($('input[name="actions"]').attr('value'));
});
</script>