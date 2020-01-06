@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">{{$genero->name}}</h2>

    <div class="container">

          <section id="cart">
            @foreach ($genero->movies as $movie)
              <article class="product">
                  <header>

                      <a href="/movies/detallePelicula/{{$movie->id}}">

                        {{-- <input type="hidden" name="id" value="{{$cart->id}}">
                        <button type="submit" class="btn btn-primary" name="button">Eliminar</button> --}}
                          <img src="/storage/{{$movie->poster}}" alt="">
                          <h3>Ver detalle</h3>
                      </a>
                  </header>

                  <div class="content">

                      <h1>{{$movie->title}}</h1>

                      {{-- <p>{{$movie->descripcion}}</p> --}}

                      {{-- <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
                      <div style="top: 43px" class="type small">XXL</div> --}}
                  </div>

                  <footer class="content">
                      {{-- <span class="qt-minus">-</span> --}}
                      <span class="qt">Id: {{$movie->id}}</span>
                      {{-- <span class="qt-plus">+</span> --}}
                      <h2 class="full-price">

                      </h2>

                      {{-- <h2 class="price">Precio: $ --}}
                        {{-- {{$producto->precio}} --}}
                      {{-- </h2> --}}
                  </footer>
                {{-- @empty
                  <h2>Su carrito se encuentra vacio</h2> --}}

              </article>
            @endforeach
          </section>

      </div>

@endsection
