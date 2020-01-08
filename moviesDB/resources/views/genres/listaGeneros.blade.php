@extends('layouts.plantilla')
@section('content')
    <h2 class="text-center py-4">Listado de Generos</h2>


    <div class="spacer px-5 mb-5">
      <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Genero</th>

        </tr>
        </thead>
        <tbody>

            @foreach ($generos as $genero)
                <tr>
                <td>{{$genero->id}}</td>
                <td><a href="/genres/listadoXgenero/{{ $genero->id }}" class="btn">{{ $genero->name }}</a></td>

                {{-- <td><a href="/products/editarProducto/{{$genero->id}}"><ion-icon name="create"></ion-icon></a></td>
                <td><a href="/products/eliminarProducto/{{$genero->id}}"><ion-icon name="trash"></ion-icon></td></a>
                </tr> --}}

            @endforeach

        </tbody>
    </table>
    <div class="text-center">
        {{$generos->links()}}
        <a href="/" class="btn btn-primary">Volver</a>
    </div>
  </div>

@endsection
