<div class="row col l12 m12 s12 arrow">
    <div class="text-align-center">
        <i class="material-icons dp48 medium">arrow_drop_down</i>
    </div>
</div>
<div class="row col l12 m12 s12 header">
    <div class="col l2 m2 s12">&nbsp;</div>
    <div class="col l8 m8 s12 text-align-center">

        <span class="main-text">OS RELÓGIOS ROLEX SÃO PRODUZIDOS SEGUNDO MÉTODOS QUE LEVAM METICULOSAMENTE EM CONTA CADA DETALHE.</span>
        <hr>
        <label class="sub-main-text">
            Descubra a coleção Rolex de relógios prestigiosos e de alta precisão. A Rolex oferece uma vasta gama de relógios Oyster Perpetual e Cellini que se adaptam a qualquer pulso. Descubra a ampla seleção de relógios Rolex: uma combinação perfeita de funcionalidade e estilo.
        </label>
    </div>
    <div class="col l2 m2 s12">&nbsp;</div>



    <div class="row col l12 m12 s12">
        @foreach($watch as $item)
            <div class="card col l3 m3 s12">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('storage/'.$item->image) }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        {{ $item->name }}
                        <i class="material-icons right">more_vert</i>
                    </span>
                    <p><a href="#">Comprar</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">
                        {{ $item->name }}
                        <i class="material-icons right">close</i>
                    </span>
                    <p>
                        {{ $item->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
 </div>

<a class="btn-floating btn-large waves-effect waves-light red btn-float btn-floating pulse"><i class="material-icons">add</i></a>
