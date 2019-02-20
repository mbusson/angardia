<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Angardia Admin') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/admin_style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui/jquery-ui.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <!-- Libraries -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <!-- Javascript -->
    <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
    <script src="{{ asset('js/admin_script.js') }}"></script>
     <!-- Trumbowyg -->
    <link rel="stylesheet" href="../trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="../trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css"></script>
    <link rel="stylesheet" href="../trumbowyg/dist/plugins/history/ui/trumbowyg.history.css"></script>
    <link rel="stylesheet" href="../trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.css"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="../trumbowyg/dist/trumbowyg.min.js"></script>
    <script src="../trumbowyg/dist/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
    <script src="../trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
    <script src="../trumbowyg/dist/plugins/history/trumbowyg.history.min.js"></script>
    <script src="../trumbowyg/dist/plugins/specialchars/trumbowyg.specialchars.min.js"></script>
</head>
<body>
    <div class="tooltip"></div>
    <div id="changelog"></div>
    <div id="adminview">