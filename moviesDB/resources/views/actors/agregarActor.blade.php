@extends('layouts.plantilla')
@section('content')
<h2 class="text-center mt-4">Agregrar actor</h2>
<div class="container-fluid">
  <div class="row mt-5">
     <div class="col-lg-8 offset-lg-2 mb-3">
         {{-- Si hay errores los muestro aquí--}}
        @if (count($errors->all())>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        @endif
        <form action="/actors/guardarActor" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                 <label for="first_name">Nombre</label>
                 <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
             </div>
             <div class="form-group">
                 <label for="last_name">Apellido</label>
                 <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
             </div>
             <div class="form-group">
                 <label for="rating">Rating</label>
                 <input type="number" class="form-control" name="rating" id="rating" value="{{ old('rating') }}">
             </div>
             <input type="hidden" name="favorite_movie_id" value="">
             {{-- <div class="form-group">
                 <label for="categorias">Pelicula favorita</label>
                 <select class="form-control" name="favorite_movie_id" id="favorite_movie_id">

                        <option value="#" disabled>Seleccione Categoria...</option>
                        @foreach ($actors->movies as $movie)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                        @endforeach
                    </select>

             </div> --}}
             {{-- <div class="">
               <label for="">Subir poster del producto</label>
               <input type="file" name="poster" value="">
             </div> --}}
             <div class="text-center">
               <button class="btn btn-primary ">Agregar actor</button>
             </div>
      </form>
    </div>
  </div>
</div>

@endsection
