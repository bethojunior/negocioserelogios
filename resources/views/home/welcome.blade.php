<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('home.head')
</head>
<body>
    @include('home.nav')
    @include('home.js')
</body>
</html>
