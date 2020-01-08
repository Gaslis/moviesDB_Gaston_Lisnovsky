<header>
  <nav class="col 12 navbar navbar-light p-3">
    <div class=" col-sm-4 col-md-3">
      <a href="/" class="MDB"> movieDB
        {{-- <img src="/img/logo-graficar.png" alt="" class="logo"> --}}
      </a>
    </div>
  <div class="col-6 col-sm-5 col-md-7 mb-3">
    {{-- <form class="pt-3" action="/products/buscarPelicula" method="GET">
      <div class="input-group">
        <input type="text" class="form-control searchRedondo" name="busqueda" value="" placeholder="Encontra la pelicula...">
      </div>
    </form> --}}
  </div>
  <div class="dropdown col-6 col-sm-3 col-md-2">
  <button type="button" class="btn btn-primary dropdown-toggle botonMenu menuMedia" data-toggle="dropdown">
    ☰
  </button>
  <div class="dropdown-menu">
    @auth
      <a href="/partials/perfil/{{ Auth::id() }}" >{{Auth::user()->name}}  <ion-icon name="person"></ion-icon></a>

    @else
      <a href="{{ route('login') }}" class="dropdown-item">Ingresá  <ion-icon name="person"></ion-icon></a>

    @endauth
    @auth

      <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    @else

      <a href="{{ route('register') }}">Registrate  <ion-icon name="create"></ion-icon></a>
    @endauth
    <a href="/movies/listaPeliculas/" class="dropdown-item">Peliculas</a>
    <a href="/genres/listaGeneros/" class="dropdown-item">Generos</a>
    <a href="/actors/listaActores/" class="dropdown-item">Actores</a>
  </div>
  {{-- @auth
    <a href="/carrito/index/">
      <button type="submit" class="btn botonChango"><ion-icon name="cart"></ion-icon><span class="badge badge-light">
        {{$carts->sum('cantidad')}}
      </span>
        <span class="sr-only badge">unread messages</span>
      </button>

    </a>
    @else
      <a href="/home">
        <button type="submit" class="btn botonChango"><ion-icon name="cart"></ion-icon></button>
      </a>
    @endauth --}}
</div>
  </nav>
  <div class="row barraRoja py-1">
    <nav class="col-6 primerNav">
      <a href="/movies/listaPeliculas/">Peliculas</a>
      <a href="/genres/listaGeneros/">Generos</a>
      <a href="/actors/listaActores/">Actores</a>
      {{-- <a href="mailto: info@graficar.com.ar"><ion-icon name="mail"></ion-icon> contacto@graficar.com</a> --}}
      {{-- @if(Auth::id()===1) --}}
        {{-- <a href="/administrarProducto"><ion-icon name=""></ion-icon>Administrar Productos</a> --}}
      {{-- @else
      <a href="/products/formularioContacto"><ion-icon name="call"></ion-icon> (011) 15 4054 6753</a>}
      @endif --}}
    </nav>
    <nav class="col-6 segundoNav">
        @auth
          <a href="/partials/perfil/{{ Auth::id() }}">{{Auth::user()->name}}  <ion-icon name="person"></ion-icon></a>
          <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        @else
          <a href="{{ route('login') }}">Ingresá  <ion-icon name="person"></ion-icon></a>
          <a href="{{ route('register') }}">Registrate  <ion-icon name="create"></ion-icon></a>
        @endauth
    </nav>
  </div>
</header>
