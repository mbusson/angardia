<?php
if (Auth::check()) {
	// on selectionne le profil du membre connecté et on récupere ses informations
	$userid = Auth::user()->id;
	$username = Auth::user()->name;
	$userinfo = \App\User::where('id', $userid)->first();
	$stat = \App\Character::where('owner', $userid)->first();

	$character_exists = DB::table('characters')
	    ->where('owner', '=', $userid)
	    ->first();
	if (is_null($character_exists)) {
	    $menu = 1;
	} else {
	    $menu = DB::table('characters')->where('owner', $userid)->value('menu');
	}
} else {
	$menu = 1;
}
?>

<div id="menu">
<?php
	if ($menu >= 1) {
?>
		<div class="menu_item" id="lexicon">
			<span class="help tip-right" role="tooltip">
				<h5>Lexicon</h5>
			</span>
			<img src="./img/gui/menu/Lexicon.png" width="48" height="48"/>
		</div>
<?php
	}
	if ($menu >= 3) {
?>
		<div class="menu_item" id="map">
			<span class="help tip-right" role="tooltip">
				<h5>Carte</h5>
			</span>
			<img src="./img/gui/menu/Map.png" width="48" height="48"/>
		</div>
		<div class="menu_item" id="stat">
			<span class="help tip-right" role="tooltip">
				<h5>Statistiques</h5>
			</span>
			<img src="./img/gui/menu/Stat.png" width="48" height="48"/>
		</div>
		<div class="menu_item" id="journal">
			<span class="help tip-right" role="tooltip">
				<h5>Journal</h5>
			</span>
			<img src="./img/gui/menu/Journal.png" width="48" height="48"/>
		</div>
		<div class="menu_item" id="inbox">
			<span class="help tip-right" role="tooltip">
				<h5>Courrier</h5>
			</span>
			<img src="./img/gui/menu/Inbox.png" width="48" height="48"/>
		</div>
<?php
	}
	if ($menu >= 2) {
?>
		<div class="menu_item" id="inv">
			<span class="help tip-right" role="tooltip">
				<h5>Inventaire</h5>
			</span>
			<img src="./img/gui/menu/Inv.png" width="48" height="48"/>
		</div>
		<div class="menu_item" id="config">
			<span class="help tip-right" role="tooltip">
				<h5>Paramètres</h5>
			</span>
			<img src="./img/gui/menu/Config.png" width="48" height="48"/>
		</div>
<?php
	}
?>
		<div class="menu_item" id="logout">
			<span class="help tip-right" role="tooltip">
				<h5>Déconnexion</h5>
			</span>
			<img src="./img/gui/menu/Logout.png" width="48" height="48"/>
		</div>
</div>