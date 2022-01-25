@extends('layouts.page')

@section('title', 'Criar candidato ')
@section('content_header')
    <h1 class="m-0 text-dark">Listagem de produtos</h1>
@stop

@section('content')
    <div class="row col-lg-12 col-md-12 col-sm-12">
        @foreach($watchs as $item)
            <div class="card col-lg-3 col-md-12 col-sm-12" style="margin: 3px">
                <img src="{{url('/storage').'/'.$item->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>
                        <h5 class="card-title">{{ $item->name }}</h5>
                    </b>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('js')

@endsection
