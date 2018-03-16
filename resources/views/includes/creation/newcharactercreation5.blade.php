<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();
$avatars = \App\Avatar::where([
    ['type', '=', $charastat->race],
    ['taken', '=', 0]
    ])->get();

if (!$charastat || $charastat->name == "null" || $charastat->race == "null" || $charastat->class == "null" || $charastat->totalmainstatscapital == 0 || $charastat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php
} else if ($charastat->avatar_url != "null") {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create6') }}");
  </script>
<?php
} else {
?>

<div class='brickncobble'>
	<div class="crowned floating"><h2>Choisissez votre Avatar</h1></div><br />
	<div class="avatar_select">
		<form action="{{ route('sendavatar') }}">
			{{ csrf_field() }}
			<div class="flexcontainer">
			<?php
				foreach ($avatars as $avatar) {
				    echo '<div class="flexbox"><table><tr><td><img src="./img/avatars/' . $avatar->url . '.jpg" class="scalable"><br /><label class="floating"><input type="radio" name="avatar" value="' . $avatar->id . '"></label></td></tr><tr><td class="maxwidth128 palegrey"><p>Recommandé pour jouer ' . $avatar->goodfor . '.</p></td></tr></table></div>';
				}
			?>
		</div><br />
		<div class="crowned floating"><button type="submit">Valider cet Avatar</button></div>
		</form>
	</div>
</div>
<?php
}
?>
