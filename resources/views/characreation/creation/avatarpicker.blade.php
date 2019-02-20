<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();
$avatars = \App\Avatar::where([
    ['type', '=', $stat->race],
    ['gender', '=', $stat->gender],
    ['taken', '=', 0],
    ['goodfor', 'LIKE', '%'.$stat->class.'%']
    ])->get();

if (!$stat || $stat->name == NULL || $stat->race == NULL || $stat->class == NULL || $stat->totalmainstatscapital == 0 || $stat->totalsecstatscapital == 0) {
// Si il manque une race, classe, nom, valeurs des lancers de dés, on redirige le joueur vers la page 1:

?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create') }}");
  </script>
<?php
} else if ($stat->avatar_url == NULL) {
?>

<div class='brickncobble maincontentview' data-simplebar>
	<div class="crowned floating"><h2>Choisissez votre Avatar</h1></div><br />
	<div class="avatar_select">
		<form action="{{ route('sendavatar') }}">
			{{ csrf_field() }}
			<div class="flexcontainer wrap">
			<?php
				foreach ($avatars as $avatar) {
				    echo '<div class="flexbox"><table class="layout display responsive-table"><tr><td><img src="./img/avatars/' . $avatar->url . '.jpg" style="height:128px;width:128px;" class="borderImg"><label class="floating"><input type="radio" name="avatar" value="' . $avatar->id . '"></label></td></tr></table></div>';
				}
			?>
		</div><br />
		<div class="crowned floating"><button type="submit" class="greenhover" style="font-size:1.1em;">Valider cet Avatar</button></div>
		</form>
	</div>
</div>
<?php
} else {
?>
  <script language="javascript" type="text/javascript">
    window.location.replace("{{ route('create6') }}");
  </script>
<?php
}
?>
