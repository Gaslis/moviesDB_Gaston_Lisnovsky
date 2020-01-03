@extends('layouts.plantilla')
@section('content')
  @section('aside')
    @include('../partials.aside')

  @endsection

<section class="col-12 col-sm-12 col-md-9 pt-5">
    <div class="row">
      @foreach ($peliculas as $pelicula)

        <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde pt-2" style=""><a href="/products/detalleProducto/{{ $pelicula->id }}" class="btn3">
          {{-- <img src="/storage/{{$pelicula->poster}}" class="card-img-top" alt="..." width="300" height="210"> --}}
          <div class="card-body">
            <h5 class="card-title"><p>{{ $pelicula->title }}</p></h5>
            {{-- <p class="card-text"><p>{{ $producto->descripcion }}</p></p> --}}
            <p class="card-text"><p>${{ $pelicula->id }}</p></p>

            <form class="" action="/carrito/agregar" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$pelicula->id}}">
              <button type="submit" class="btn btn-primary" name="button">Agregar al Carrito</button><br>
              <input type="hidden" name="id" value="{{$pelicula->id}}">
              </form>
            {{-- <a href="/products/detalleProducto/{{ $producto->id }}" class="btn3">Ver más</a> --}}
          </div>
            </a>
        </div>

      @endforeach
    </div>
    <div>
        {{-- {{$pelicula->links()}} --}}
    </div>
  </section>

</main>

@endsection
