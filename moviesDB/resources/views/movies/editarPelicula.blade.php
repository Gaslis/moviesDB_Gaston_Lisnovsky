@extends('layouts.plantilla')
@section('content')
<h2 class="text-center pt-4">Editar:  {{ $peliculaEditar->title }}</h2>
<div class="container-fluid mb-4">
<div class="row mt-4">
     <div class="col-lg-8 offset-lg-2 pb-4">
         {{-- Si hay errores los muestro aquí--}}
        @if (count($errors->all())>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        @endif
        <form action="/movies/guardarPeliculaEditada/{{ $peliculaEditar->id }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                 <label for="title">Titulo</label>
                 <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $peliculaEditar->title) }}">
             </div>
             <div class="form-group">
                 <label for="rating">Rating</label>
                 <input type="number" class="form-control" name="rating" id="rating" value="{{ old('rating', $peliculaEditar->rating) }}">
             </div>
             <div class="form-group">
                 <label for="awards">Awards</label>
                 <input type="number" class="form-control" name="awards" id="awards" value="{{ old('awards', $peliculaEditar->awards) }}">
             </div>
             <input type="hidden" name="genre_id" value="{{ $peliculaEditar->genre_id }}">
             <div class="form-group">
                 <label for="generos">Genero</label>
                 <select class="form-control" name="genre_id" id="genre_id">

                        <option value="{{$peliculaEditar->genre_id }}" >{{$peliculaEditar->genre->name ?? ''}}</option>
                        @foreach ($generos as $genero)
                            <option value="{{$genero->id}}">{{$genero->name}}</option>
                        @endforeach
                    </select>

             </div>
             <div class="">
               <label for="">Subir poster del producto</label>
               <input type="file" name="poster" value="">
             </div>

        </form>
     </div>
   </div>
   <div class="text-center">
       <button type="submit" class="btn btn-primary">Actualizar pelicula</button>
   </div>
</div>
@endsection
