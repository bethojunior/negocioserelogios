@extends('layouts.page')

@section('title', 'Criar candidato ')
@section('content_header')
    <h1 class="m-0 text-dark">Criar produto</h1>
@stop

@section('content')
    @include('layouts.alert')
    <div class="row col-lg-12 col-md-12 col-sm-12">
        <form class=" row col-lg-12" action="{{ route('watchs.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                <label>Nome</label>
                <input required name="name" type="text" class="form-control">
            </div>

            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                <label>Marca</label>
                <select required name="watch_type_id" class="form-control">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                <label>Gênero</label>
                <select required name="gender" class="form-control">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label>Descrição</label>
                <textarea required name="description" class="form-control" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label>Imagem</label>
                <input id="image" required name="image" class="form-control" type="file">


                <div id="modal-preview-image" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Prévia da imagem</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-upload-item" src="" alt="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-2 col-lg-12">
                <input type="submit" class="btn btn-outline-success" value="Salvar">
            </div>
        </form>
    </div>
@stop

@section('js')
    <script>
        if(document.getElementById("image") !== null) {
            document.getElementById("image").onchange = function() {
                $('#modal-preview-image').modal('show')
                if (this.files && this.files[0]) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("image-upload-item").setAttribute('src', e.target.result);
                        imageOne = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            };
        }
    </script>
@endsection
