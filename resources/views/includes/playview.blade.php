<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if ($userinfo->linked_character >= 1) {
// Si au moins un perso est créé
?>


<!--play view-->


<?php
}
?>
