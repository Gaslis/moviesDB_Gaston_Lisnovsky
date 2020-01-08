@extends('layouts.plantilla')
@section('content')
  @section('aside')
    @include('../partials.aside')

  @endsection

  <section class="col-12 col-sm-12 col-md-9 pt-5">
    <div class="row">
      @foreach ($peliculas as $pelicula)
        <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde pt-2" style="">
          <a href="/movies/detallePelicula/{{ $pelicula->id }}" class="btn3">
            <img src="/storage/{{$pelicula->poster}}" class="card-img-top" alt="..." width="100" height="auto">
            <div class="card-body">
              <h5 class="card-title"><p>{{ $pelicula->title }}</p></h5>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    <div>
      {{$peliculas->links()}}
    </div>
  </section>
</main>
@endsection
