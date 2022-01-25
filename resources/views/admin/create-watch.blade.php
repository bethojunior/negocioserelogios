@extends('layouts.page')

@section('title', 'Criar candidato ')
@section('content_header')
    <h1 class="m-0 text-dark">Criar produto</h1>
@stop

@section('content')
    @include('layouts.alert')
    <div class="row col-lg-12 col-md-12 col-sm-12">
        <form class=" row col-lg-12" action="{{ route('watchs.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                <label>Nome</label>
                <input required name="name" type="text" class="form-control">
            </div>

            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                <label>Marca</label>
                <select name="watch_type_id" class="form-control">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                <label>Genero</label>
                <select name="gender" class="form-control">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>

            <div class="mt-2 col-lg-12">
                <input type="submit" class="btn btn-outline-success" value="Salvar">
            </div>
        </form>
    </div>
@stop

@section('js')

@endsection
