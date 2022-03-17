<nav id="main-nav" class="main-nav center">
    <img class="logo" src="{{ asset('assets/images/logo/logo-sem-fundo.png') }}" alt="">
    <div class="relative">
        <div class="absolute" id="search-product">
            <i class="material-icons medium">search</i><span class="">Pesquisar</span>
        </div>
    </div>
</nav>

<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
        <div class="background">
        <img src="{{ asset('assets/images/icons/relogio_backgound_nav.webp') }}">
        </div>
        <a href="#user"><img class="circle" src="{{ asset('assets/images/logo/logo-sem-fundo.png') }}"></a>
        <a href="#name"><span class="white-text name">Relógios e negócios</span></a>
        <a href="#email"><span class="white-text email">contato@relogioenegocios.com.br</span></a>
        </div>
    </li>
    <li><a id="search-mobile">Pesquisar</a></li>
    <li><a href="#!">Mais acessados</a></li>
    <li><a href="#!">Novidades</a></li>
    <li><a href="#!">Relógios masculinos</a></li>
    <li><a href="#!">Relógios femininos</a></li>
    <li><a href="#!">Nossas marcas</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Entre em contato conosco</a></li>
    <div class="footer-social">
        <a><img width="40vw" src="{{  asset('assets/images/icons/whats.png') }}" alt=""></a>
        <a><img width="40vw" src="{{  asset('assets/images/icons/instagram.png') }}" alt=""></a>
        <a><img width="40vw" src="{{  asset('assets/images/icons/facebook.png') }}" alt=""></a>
    </div>
</ul>

<a href="#" data-target="slide-out" class="sidenav-trigger main-nav-mobile"><i class="material-icons">menu</i></a>


<div class="row col l12 m12 s12 ">
    <video style="padding: 0; margin:0" class="col l12 m12 s12" id="nav-video" src="{{ asset('assets/images/watch.webm') }}" autoplay="" playsinline="" loop="" preload="auto"  muted="muted"></video>
</div>

{{-- Modal produtos --}}
<div id="modal-search" class="modal bottom-sheet">
    <div class="modal-content">
        <h4 class="font-default">Busque seu produto pela marca</h4>
        <hr>
        {{-- <p>A bunch of text</p> --}}
        <form action="#">
            @foreach($type as $item)
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>{{ $item->name }}</span>
                    </label>
                </p>
            @endforeach
            <input class="btn" type="submit" value="Pesquisar">
          </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
</div>
