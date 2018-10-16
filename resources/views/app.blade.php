<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red CMS</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bulma -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div id="app"></div>
  <script src="js/app.js"></script>
</body>
</html>
