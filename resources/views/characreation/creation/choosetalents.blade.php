<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();
$avatar = \App\Avatar::where('url', $stat->avatar_url)->first();

if (!$stat || $stat->name == NULL || $stat->race == NULL || $stat->class == NULL || $stat->totalmainstatscapital == 0 || $stat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php
} else if ($stat->avatar_url != NULL) {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create6') }}");
  </script>
<?php
} else if ($stat->main_trait_1 != NULL && $stat->sec_trait_1 != NULL) {
?>
	<script language="javascript" type="text/javascript">
	  window.location.replace("{{ route('create5') }}");
	</script>
<?php
} else {

?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Choix de vos Talents</h2></div>
	<div class='textbox' style="text-align:center;">
		<p>Choisissez votre talent de départ. Attention, vous n'avez le droit qu'à un talent principal, et un talent secondaire!</p>
	</div><br />
	<br />
	<form id="sendtraits" action="{{ route('sendfirsttraits') }}">
		      {{ csrf_field() }}
		<div class="flexcontainer" width="100%">
	    	<div class='infotextbox flexbox nomargin centeredtext'>
			    <h4>Principal:</h4>
			    <select name="maintrait" class="bigselect" style="padding:0 64px;">
			    	<optgroup label="Physique">
			    		<option value="athle" title="Bénéficie d'un bonus passif à tous les tests de constitution.">Athlète</option>
						<option value="acrob" title="Les détenteurs de ce talent bénéficient d'un bien meilleur équilibre et d'une aisance supérieure pour exécuter des performances acrobatiques.">Acrobatie</option>
						<option value="resis" title="Dote son détenteur d'une meilleure défense et endurance.">Résistant</option>
						<option value="voyag" title="Lorsque vous voyagez plus de 6 cases par jour, toute case de déplacement supplémentaire ne coûtera jamais plus que 1 MP.">Voyageur</option>
						<option value="charg" title="Au premier tour de combat, votre attaque de base touche tous les ennemis.">Charge</option>
						<option value="ambid" title="Avoir une arme (différente) dans chaque main augmente les dégâts finaux de chaque attaque directe.">Ambidextre</option>
					</optgroup>
					<optgroup label="Magique">
						<option value="ele_feu" title="Tous vos sorts de feu (y compris les sorts hybrides: feu/terre [magma], feu/air [déflagration],...) ignorent la résistance au feu de votre cible.">Pyromancie</option>
				    	<option value="ele_eau" title="Tous vos sorts d'eau (y compris les sorts hybrides: eau/air [sorts atmosphériques], eau/terre [plantes],...) ignorent la résistance à l'eau de votre cible.">Hydromancie</option>
				    	<option value="ele_air" title="Tous vos sorts d'air (y compris les sorts hybrides: eau/air [sorts atmosphériques], air/acide [nuage toxique],...) ignorent la résistance à l'air de votre cible.">Aéromancie</option>
				    	<option value="ele_ter" title="Tous vos sorts de Terre (y compris les sorts hybrides: feu/terre [magma], eau/terre [plantes],...) ignorent la résistance à la Terre de votre cible.">Sismomancie</option>
				    	<option value="ele_aci" title="Tous vos sorts d'acide et de poison (y compris les sorts hybrides: eau/acide [mixtures], feu/acide [déflagration],...) ignorent la résistance à l'acide et et aux poisons de votre cible.">Solutomancie</option>
				    	<option value="initi" title="L'entraînement magique des initiés leur confère un savoir-faire poussé sur le lancer de sorts défensifs, accordant plus de protection.">Initié</option>
					</optgroup>
					<optgroup label="Intellectuel">
						<option value="survi" title="Détient des connaissances solides et utiles en milieu naturel.">Survie</option>
						<option value="pickp" title="Grâce à des doigts agiles, les chances de réussite pour voler et dissimuler des objets sont au-dessus de la moyenne.">Pickpocket</option>
						<option value="furti" title="Sait se dissimuler dans son environnement.">Furtif</option>
						<option value="alert" title="Détecte les pièges plus facilement.">Alerte</option>
						<option value="bluff" title="Mentir est une seconde nature, et les chances de réussite en tromperie sont plus élevées.">Bluff</option>
						<option value="diplo" title="Brille en situation de crise sociale et sait calmer une chamaillerie.">Diplomate</option>
					</optgroup>
			    </select>
			</div>
			<div class='infotextbox flexbox nomargin centeredtext'>
			    <h4>Secondaire:</h4>
			    <select name="sectrait" class="bigselect" style="padding:0 64px;">
			    	<optgroup label="Physique">
			    		<option value="pre_soin" title="Sait se soigner des blessures mineures sur lui-même sans coût matériel ni mana. Chaque blessure physique (et non magique) reçue provoque une chance de guérison partielle.">Premiers Soins</option>
						<option value="equit" title="Faculté de monter à cheval et autres animaux sellés sans tests.">Équitation</option>
						<option value="balay" title="Contre plusieurs ennemis, votre attaque de base a une chance de toucher deux cibles au lieu d'une.">Balayage</option>
						<option value="intim" title="Peut influencer plus facilement le comportement des autres par intimidation.">Intimidation</option>
						<option value="escal" title="Agile comme un singe, les jets d'escalade bénéficient d'un large bonus.">Escalade</option>
						<option value="natat" title="Sait nager avec aisance, même dans les eaux agitées.">Natation</option>
			    	</optgroup>
					<optgroup label="Magique">
						<option value="ami_anim" title="Possède une faculté innée à comprendre le comportement des animaux et à leur inspirer confiance. Dans certains cas, il est même possible de s'en faire des amis.">Ami des Animaux</option>
				    	<option value="diver" title="Sait captiver les foules, ou divertir une cible par une performance.">Divertissant</option>
				    	<option value="oniro" title="Art d'interpréter les rêves, et parfois même d'en tirer des prophéties.">Oniromancie</option>
				    	<option value="thaum" title="Un Thaumaturge sait, par sa connaissance du fonctionnement des poisons, causer de légers dommages additionnels sur les cibles empoisonnées.">Thaumaturge</option>
				    	<option value="renvo" title="Cette caractéristique accorde une faible chance de renvoyer un sort adverse.">Renvoi de Sort</option>
				    	<option value="gueri" title="Suite à un entraînement drastique aux arts de la magie régénératrice, un guérisseur gagne une efficacité accrue sur les sorts de guérison.">Guérisseur</option>
					</optgroup>
					<optgroup label="Intellectuel">
						<option value="intui" title="Ce talent donne une chance supplémentaire de détecter les mensonges et mauvaises intentions.">Intuition</option>
						<option value="trapp" title="Sait poser des pièges et traquer une cible bien mieux que le commun des mortels.">Trappeur</option>
						<option value="incog" title="Pratique l'art de se déguiser efficacement et endosser diverses personnalités.">Incognito</option>
						<option value="escro" title="Possède une excellente faculté à arnaquer les crédules.">Escroc</option>
						<option value="roi_evas" title="Sait se défaire de ses entraves avec plus de facilités.">Roi de l’évasion</option>
						<option value="sabot" title="Peut désarmer des pièges simples et saboter des objets mécaniques.">Saboteur</option>
					</optgroup>
			    </select>
			</div>
		</div>
	</form>
	<div class="flexcontainer center">
		<div class="flexbox darkmessagebox flexcontainer vert center">
			<h4 class="flexbox wide_messagebox">Principaux: </h4>
			<div class="flexcontainer center nomargin centeredtext">
				<div class="flexbox shadowed">
			    	<div class='textbox' style="margin:0;padding:10px;line-height:1.75;letter-spacing:-0.65px;">
					    <h4 style="margin-bottom:8px;">Physique</h4>
							<span class="tt" id="athle"></span><br />
							<span class="tt" id="acrob"></span><br />
							<span class="tt" id="resis"></span><br />
							<span class="tt" id="voyag"></span><br />
							<span class="tt" id="charg"></span><br />
							<span class="tt" id="ambid"></span>
					</div>
				</div>
				<div class="flexbox shadowed">
			    	<div class='textbox' style="margin:0;padding:10px;line-height:1.75;letter-spacing:-0.65px;">
					    <h4 style="margin-bottom:8px;">Magique</h4>
					    	<span class="tt" id="ele_feu"></span><br />
					    	<span class="tt" id="ele_eau"></span><br />
					    	<span class="tt" id="ele_air"></span><br />
					    	<span class="tt" id="ele_ter"></span><br />
					    	<span class="tt" id="ele_aci"></span><br />
					    	<span class="tt" id="initi"></span>
					</div>
				</div>
				<div class="flexbox shadowed">
			    	<div class='textbox' style="margin:0;padding:10px;line-height:1.75;letter-spacing:-0.65px;">
					    <h4 style="margin-bottom:8px;">Intellectuel</h4>
							<span class="tt" id="survi"></span><br />
							<span class="tt" id="pickp"></span><br />
							<span class="tt" id="furti"></span><br />
							<span class="tt" id="alert"></span><br />
							<span class="tt" id="bluff"></span><br />
							<span class="tt" id="diplo">
					</div>
				</div>
			</div>
		</div>
		<div class="flexbox darkmessagebox flexcontainer vert center">
			<h4 class="flexbox wide_messagebox">Secondaires: </h4>
			<div class="flexcontainer center nomargin centeredtext">
				<div class="flexbox shadowed">
			    	<div class='textbox' style="margin:0;padding:10px;line-height:1.75;letter-spacing:-0.65px;">
					    <h4 style="margin-bottom:8px;">Physique</h4>
							<span class="tt" id="pre_soin"></span><br />
							<span class="tt" id="equit"></span><br />
							<span class="tt" id="balay"></span><br />
							<span class="tt" id="intim"></span><br />
							<span class="tt" id="escal"></span><br />
							<span class="tt" id="natat"></span>
					</div>
				</div>
				<div class="flexbox shadowed">
			    	<div class='textbox' style="margin:0;padding:10px;line-height:1.75;letter-spacing:-0.65px;">
					    <h4 style="margin-bottom:8px;">Magique</h4>
					    	<span class="tt" id="ami_anim"></span><br />
					    	<span class="tt" id="diver"></span><br />
					    	<span class="tt" id="oniro"></span><br />
					    	<span class="tt" id="thaum"></span><br />
					    	<span class="tt" id="renvo"></span><br />
					    	<span class="tt" id="gueri"></span>
					</div>
				</div>
				<div class="flexbox shadowed">
			    	<div class='textbox' style="margin:0;padding:10px;line-height:1.75;letter-spacing:-0.65px;">
					    <h4 style="margin-bottom:8px;">Intellectuel</h4>
							<span class="tt" id="intui"></span><br />
							<span class="tt" id="trapp"></span><br />
							<span class="tt" id="incog"></span><br />
							<span class="tt" id="escro"></span><br />
							<span class="tt" id="roi_evas"></span><br />
							<span class="tt" id="sabot"></span>						
					</div>
				</div>
			</div>
		</div> 
	</div>
	<br />
	<div class="flexcontainer center">
		<br /><br />
		<input type="submit" class="standard greenhover" style="font-size:1.1em;" value="Valider" form="sendtraits">
		<br /><br /><br />
	</div>
	<br />
	<div class="crownImg"><img src="./img/illu/banner/charatalents.jpg" /></div>
</div>

<?php
}
?>
