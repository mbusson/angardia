<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$charastat = \App\Character::where('owner', $userid)->first();

if ($userinfo->linked_character == 0) {
// Si aucun perso n'est créé
?>

<div class="brickncobble">
    <div class="crowned floating"><h2>Bienvenue sur Angardia</h2></div>
    <div class="wide_messagebox shadowed">
            <img src="./img/misc/create.jpg" style="width:100%;"><br /><br />
            <p>Bonjour, {{ $userinfo->name }}. <br />
                <br />
            Vous n'avez pas encore de personnage, nous allons commencer par vous en créer un. <strong>Attention</strong>, ce sera votre seul personnage avant de débloquer le droit d'en créer d'autres (dans un bon moment!). Choisissez avec soin!<br />
                <br />
            Si vous souhaitez effectuer une visite guidée du jeu afin de savoir dans quoi vous vous lancez, vous pouvez consulter le menu à votre gauche, ou regarder un apercu du jeu ci-dessous.<br />
                <br />
            </p>
                <br />

            <form action="{{ route('create') }}" class="floating"><button type="submit"><strong>Créer mon personnage!</strong></button></form>
                <br />
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <p>Ceci est un aperçu du jeu. Magnifique, n'est-ce pas?</p>
</div>

<?php
}
?>
