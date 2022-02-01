@extends('adminlte::page')

<meta property="og:title" content="Negócios e Relógios" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://negocioserelogios.com.br/" />
<meta property="og:image" content="{{ asset('assets/images/logo/logo-sem-fundo.png') }}" />
<meta name="og:description" content="Relógios para homens de negócio" />
<meta name="description" content="Relógios para homens de negócio" />
<meta property="og:site_name" content="Negócios e Relógios" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('config/main.css') }}">

@section('title')
    @yield('page-title')
@endsection
@section('content_header')
    @include('layouts.alert')
@endsection

<script src="{{ asset('config/main.js') }}"></script>
<script src="{{ asset('js/libs/jquery.js') }}"></script>
<script src="{{ asset('js/utils/ElementProperty.js') }}"></script>
<script src="{{ asset('js/service/Session.js') }}"></script>
<script src="{{ asset('js/libs/sweetalertmin.js') }}"></script>
<script src="{{ asset('js/utils/SwalCustom.js') }}"></script>
<script src="{{ asset('js/service/ConnectionServer.js') }}"></script>
<script src="{{ asset('js/service/Init.js') }}"></script>
<script src="{{ asset('js/utils/Mask.js') }}"></script>
<script src="{{ asset('js/service/MainServices.js') }}"></script>
