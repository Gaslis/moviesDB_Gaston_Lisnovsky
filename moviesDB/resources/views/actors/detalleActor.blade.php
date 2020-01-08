@extends('layouts.plantilla')

@section('content')
<h2 class="text-center pt-3">Detalle de la Actor</h2>
<div class="row mt-5">
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
                  <p>{{$movie->title}} </p>
                @endforeach</li>
                {{-- <li class="list-group-item">Fecha de creación: {{$pelicula->release_date}}</li>
                <li class="list-group-item">Duracion: {{$pelicula->length}}</li>
                <li class="list-group-item">Genero: {{$pelicula->genre->name}}</li> --}}
            </ul>
        </div>
      </div>
    </div>
    <div class="text-center mb-2">
      <a href="/actors/listaActores" class="btn btn-danger mt-2">Volver al listado</a>
    </div>
@endsection
