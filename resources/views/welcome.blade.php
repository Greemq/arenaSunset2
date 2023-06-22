<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="./public/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="./public/img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="./public/img/favicons/favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<style>
    .vue-map-container .vue-map {
        height: 100% !important;
    }
</style>
<body>

<div id="app">
    <base-component></base-component>
</div>

<script src="{{ mix('/js/app.min.js') }}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf9UP6bU2Q-8tFyKZW5ag8GmFHt-HtSiU&callback=initMap&v=weekly"--}}
{{--        defer></script>--}}
</body>

</html>

