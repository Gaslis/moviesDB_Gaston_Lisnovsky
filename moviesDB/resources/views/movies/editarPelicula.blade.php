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
        <div class="form-group">
         <label for="length">Duración</label>
         <input type="number" class="form-control" name="length" id="length" value="{{old('length', $peliculaEditar->length) }}">
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

             {{-- <input type="hidden" name="actor_id[]" value="{{ $peliculaEditar->actor_id }}">
             <div class="form-group">
                <label for="actores">actores</label>
                @foreach ($peliculaEditar->actors as $actor)
                  <select class="form-control" name="actor_id[]" id="actor_id">
                  <option value="{{$actor->id}}" >{{$actor->first_name}} {{$actor->last_name}}</option>
                    @foreach ($actores as $actor)
                      <option value="{{($actor->id)}}">{{$actor->first_name}} {{$actor->last_name}}</option>
                    @endforeach
                  </select>
                @endforeach
             </div> --}}

          <div class="">
            <label for="">Subir poster del producto</label>
            <input type="file" name="poster" value="">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar pelicula</button>
          </div>
        </form>
     </div>
   </div>
</div>
@endsection
