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

if ($result->linked_character == 0) {
// Si aucun perso n'est créé
?>


<div class="wide_messagebox">
    <p>Bonjour, {{ $result->name }}. Vous n'avez pas encore de personnage, nous allons commencer par vous en créer un. Attention, ce sera votre seul personnage avant de débloquer le droit d'en créer d'autres (dans un bon moment!). Choisissez-bien! :) <br />
    <br />
    Si vous souhaitez effectuer une visite guidee du jeu afin de savoir dans quoi vous vous lancez, vous pouvez consulter le menu a votre gauche, ou regarder un apercu du jeu en cliquant <a href="{{ route('create') }}">ici</a>!</p>

    <a href="{{ route('create') }}" class="button">Créer mon personnage!</a>

</div>

<?php
}
?>
