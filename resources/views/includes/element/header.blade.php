<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Angardia - Jeu de Rôle en Ligne') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/simplebar.css">
    <link rel="stylesheet" href="css/start.css">
    <link rel="stylesheet" href="css/gui.css">
    <link rel="stylesheet" href="css/jquery-ui/jquery-ui.min.css">
    <!-- Libraries -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <!-- Javascript -->
    <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
	<script src="js/start_tweaks.js"></script>
    <script src="js/start_tools.js"></script>
    <script src="js/gui.js"></script>
    <script src="js/tooltips.js"></script>
    <script src="js/simplebar.js"></script>
    <script src="js/gauge.js"></script>
    <!-- Trumbowyg -->
    <link rel="stylesheet" href="trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css"></script>
    <link rel="stylesheet" href="trumbowyg/dist/plugins/history/ui/trumbowyg.history.css"></script>
    <link rel="stylesheet" href="trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.css"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="trumbowyg/dist/trumbowyg.min.js"></script>
    <script src="trumbowyg/dist/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
    <script src="trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
    <script src="trumbowyg/dist/plugins/history/trumbowyg.history.min.js"></script>
    <script src="trumbowyg/dist/plugins/specialchars/trumbowyg.specialchars.min.js"></script>

<!--Setup Sidebar & Menu as invisible until Biography-->
<?php 
if (Auth::check()) {
    $userid = Auth::user()->id; 
    $stat = \App\Character::where('owner', $userid)->first();
    try {
        $equip = \App\Equipment::where('id', $stat->id)->first();
    } catch (ErrorException $e) {
        // do nothing if doesn't exist
    }

    if ($stat && $stat->sidebar == 1) {
        ?><style>#sidebar, #sidebar_toggle {display: block;}</style><?php
    } else {
        ?><style>#sidebar, #sidebar_toggle {display: none;}</style><?php 
    }
}
?>
</head>
<body>
    <div id="ajaxload">
      <div class="loader-18"><img src="../public/img/gui/hourglass.png" class="imgresize"/></div>
    </div>
    <div id="mainMenuDiv"></div>
<div id="playview">
    <div id="flexequipcontainer"></div>
    <div id="clock">
        <div id="clock_icon">
            <?php 
                echo makeIcon(formatDate(time()));
            ?>
        </div>
        <span id="clock_date">
            <?php 
                echo makeDate(formatDate(time()));
            ?>
        </span>
        <span id="clock_season">
            <?php 
                echo getSeason(formatDate(time()));
            ?>
        </span>
    </div>
