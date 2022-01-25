@extends('layouts.page')

@section('title', 'Criar candidato ')
@section('content_header')
    <h1 class="m-0 text-dark">Listagem de produtos</h1>
@stop

@section('content')
    <div class="row col-lg-12 col-md-12 col-sm-12">
        {{ $watchs }}
    </div>
@stop

@section('js')

@endsection
