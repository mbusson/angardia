<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userinfo = DB::select('select * from users where name = :username', ['username' => Auth::user()->name]);
$stat = DB::select('select * from characters where owner = :userid', ['userid' => Auth::user()->id]);

if (!$characterresult->name || !$characterresult->race || !$characterresult->class) 
{
// Si il manque une race, classe ou nom, on redirige le joueur vers la page 1:

  // --- !!! --- REDIRECT --- !!! --- //

} else {

// stats PHP

?>

<!-- stats HTML -->

<?php
}
?>
