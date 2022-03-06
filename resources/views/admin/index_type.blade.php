@extends('layouts.page')

@section('title', 'Criar candidato ')
@section('content_header')
    <h1 class="m-0 text-dark">Listagem de produtos</h1>
@stop

@section('content')
    <div class="row col-lg-12 col-md-12 col-sm-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nome</th>
            </tr>
            </thead>
            <tbody>
                @foreach($types as $item)
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')

@endsection
