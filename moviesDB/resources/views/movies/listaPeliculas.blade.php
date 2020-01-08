@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">Listado de peliculas</h2>


    <div class="spacer px-5 mb-5">
      <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ver</th>
            <th>Editar</th>
            {{-- <th>Eliminar</th> --}}
        </tr>
        </thead>
        <tbody>

            @foreach ($peliculas as $key => $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td><a href="/movies/detallePelicula/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>
                <td><a href="/movies/editarPelicula/{{$value->id}}"><ion-icon name="create"></ion-icon></a></td>
                {{-- <td><a href="/movies/eliminarPelicula/{{$value->id}}"><ion-icon name="trash"></ion-icon></td></a> --}}
                </tr>

            @endforeach
        <tr>

        </tr>
        </tbody>
    </table>
    <div>
        {{$peliculas->links()}}
        {{-- <a href="/" class="btn btn-primary">Volver</a> --}}
    </div>
    </div>


@endsection
