@extends('layouts.plantilla')

@section('content')
<h2 class="text-center">Detalle de la Actor</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title text-center"></h5>
                {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi minima nemo expedita distinctio ipsa eum magnam fugiat! Aspernatur, illo.</p> --}}
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item ">Nombre: {{$actor->first_name}}</li>
                <li class="list-group-item ">Apellido:{{$actor->last_name}} </li>
                <li class="list-group-item">Rating Actor: {{$actor->rating}}</li>
                {{-- <li class="list-group-item">Fecha de creación: {{$pelicula->release_date}}</li>
                <li class="list-group-item">Duracion: {{$pelicula->length}}</li>
                <li class="list-group-item">Genero: {{$pelicula->genre->name}}</li> --}}
            </ul>
            <div class="content">
                @foreach ($actor->movies as $movie)
                  <p>{{$movie->title}} </p>
                @endforeach
            </div>

        </div>
        <a href="/actors/listaActores" class="btn btn-danger">Volver al listado</a>
    </div>

</div>

@endsection
