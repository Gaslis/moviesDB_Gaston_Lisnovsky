@extends('layouts.plantilla')

@section('content')
<h2 class="text-center p-3">Detalle del Actor</h2>
<div class="row">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title "></h5>
                <p class="card-text">Nombre: {{$actor->first_name}} {{$actor->last_name}}</p>
            </div>
            <ul class="list-group list-group-flush">
            {{-- <li class="list-group-item ">Apellido: </li> --}}
                <li class="list-group-item ">Rating Actor: {{$actor->rating}}</li>
                <li class="list-group-item">@foreach ($actor->movies as $movie)
                  <a href="/movies/detallePelicula/{{ $movie->id }}" class="btn3"><p>{{$movie->title}} </p>
                  </a>

                @endforeach</li>
                {{-- <li class="list-group-item">Fecha de creación: {{$pelicula->release_date}}</li>
                <li class="list-group-item">Duracion: {{$pelicula->length}}</li>
                <li class="list-group-item">Genero: {{$pelicula->genre->name}}</li> --}}
            </ul>
        </div>
      </div>
    </div>
    <div class="text-center m-5">
      {{-- <a href="/actors/listaActores" class="btn btn-danger my-2">Volver al listado</a> --}}
    </div>
@endsection
