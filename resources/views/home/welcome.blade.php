<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('home.head')
</head>
<body>
    <div class="row col l12 m12 s12">
        @include('home.nav')
        @include('home.content')
        @include('home.js')
    </div>
</body>
</html>
