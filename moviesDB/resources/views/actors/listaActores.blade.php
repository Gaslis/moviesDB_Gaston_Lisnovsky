@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">Listado de Actores</h2>


    <div class="spacer px-5 mb-5">
      <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ver</th>
            {{-- <th>Eliminar</th> --}}
        </tr>
        </thead>
        <tbody>

            @foreach ($actores as $actor)
                <tr>
                <td>{{$actor->id}}</td>
                <td>{{$actor->first_name}}</td>
                <td>{{$actor->last_name}}</td>
                <td><a href="/actors/detalleActor/{{$actor->id}}"><ion-icon name="eye"></ion-icon></a></td>
                {{-- <td><a href="/products/editarProducto/{{$actor->id}}"><ion-icon name="create"></ion-icon></a></td>
                <td><a href="/products/eliminarProducto/{{$actor->id}}"><ion-icon name="trash"></ion-icon></td></a> --}}
                </tr>

            @endforeach
        <tr>

        </tr>
        </tbody>
    </table>
    <div>
        {{$actores->links()}}
        <a href="/actors/agregrarActor/" class="btn btn-primary">Agregar Actor</a>
    </div>
    </div>

@endsection
