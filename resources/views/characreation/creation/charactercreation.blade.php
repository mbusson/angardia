<?php

// on selectionne le profil du membre connecté et on récupere ses informations
$userid = Auth::user()->id;
$username = Auth::user()->name;
$userinfo = \App\User::where('name', $username)->first();
$stat = \App\Character::where('owner', $userid)->first();

if ($userinfo->linked_character == 0) {
// Si aucun perso n'est créé
?>

<div class="brickncobble maincontentview" data-simplebar>
    <div id="contents">
        <div class="crowned floating"><h2>Bienvenue sur Angardia</h2></div>
        <div class="wide_messagebox">
            <img class="roundedcorners" src="./img/misc/create.jpg" width="100%">
            <div class="textbox">Bonjour, {{ $userinfo->name }}. <br />
                <br />
            Vous n'avez pas encore de personnage, nous allons commencer par vous en créer un. 
            <br />
            <br /><strong>Attention</strong>, choisissez avec soin, ce sera votre seul personnage avant de débloquer le droit d'en créer d'autres (dans un bon moment!).
            <br />
            <br />Si vous souhaitez effectuer une visite guidée du jeu afin de savoir dans quoi vous vous lancez, vous pouvez consulter le menu à votre gauche, ou regarder un apercu du jeu ci-dessous.<br />
                <br />
            </div>
                <br />

            <form action="{{ route('launchcharacreation') }}" class="floating"><button type="submit" class="greenhover"><strong>Créer mon personnage!</strong></button></form>
        </div>
    </div>
</div>

<?php
} else {
?>
<script language="javascript" type="text/javascript">
  window.location.replace("{{ route('launchcharacreation') }}");
</script>
<?php
}
?>