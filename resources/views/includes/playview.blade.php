<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userinfo = DB::select('select * from users where name = :username', ['username' => Auth::user()->name]);
$characterinfo = DB::select('select * from characters where owner = :username', ['username' => Auth::user()->name]);

foreach ($userinfo as $result) {
    echo $result->name; echo '<br>';
    echo 'id: ' . $result->id; echo '<br>';
    echo 'personnages: ' . $result->linked_character; echo '<br>';
}
foreach ($characterinfo as $result) {
    echo 'personnage: ' . $result->name; echo '<br>';
    echo 'id: ' . $result->id; echo '<br>';
    echo 'proprietaire: ' . $result->owner; echo '<br>';
}

if ($result->linked_character >= 1) {
// Si au moins un perso est créé
?>


<!--play view-->


<?php
}
?>
