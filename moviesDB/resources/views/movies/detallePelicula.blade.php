@extends('layouts.plantilla')
@section('content')
{{-- <section class="col-12 col-sm-12 col-md-9"> --}}
<main>
  <div class="container pt-5 mb-5 col-12 col-sm-12 col-md-9">
    <div class="row justify-content-center">
    {{-- </main> --}}
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters" >
        <div class="col-md-4">
          <img src="/storage/{{$pelicula->poster}}" class="card-img" alt="..." >
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">{{$pelicula->title}} <span class="badge"> {{$pelicula->rating}}</span></h2>
            <h4>Actores</h4>
            @foreach ($pelicula->actors as $actor)
              <p class="card-text">{{$actor->first_name}} {{$actor->last_name}}</p>
            @endforeach
            <p class="card-text"><small class="text-muted">Duracion: {{$pelicula->length ?? ''}} min ||  {{$pelicula->genre->name ?? ''}} </small></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  </main>
{{-- </section> --}}
@endsection


{{-- <article class="product pt-5">
    <header>
      <img src="/storage/{{$pelicula->poster}}" alt="">
    </header>

    <div class="content">
        <h1>{{$pelicula->title}}</h1>
        @foreach ($pelicula->actors as $actor)
          <p>{{$actor->first_name}} {{$actor->last_name}} </p>
        @endforeach
        <p></p>
        <p></p> --}}
        {{-- <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
        <div style="top: 43px" class="type small">XXL</div> --}}
    {{-- </div>

    <footer class="content"> --}}
        {{-- <span class="qt-minus">-</span> --}}
        {{-- <span class="qt ml-2"> --}}
           {{-- {{$pelicula->genre->name ?? ''}}</span> --}}
        {{-- <span class="qt-plus">+</span> --}}
        {{-- <h2 class="full-price">
          <form class="" action="/" method="get">
          @csrf --}}
            {{-- <input type="hidden" name="id" value="{{$pelicula->id}}"> --}}
            {{-- <button type="submit" class="btn btn-primaryF pb-3" name="button">Volver</button>
          </form>
        </h2> --}}

        {{-- <h2 class="price">

        </h2>
    </footer> --}}
  {{-- @empty
    <h2>Su carrito se encuentra vacio</h2> --}}

{{-- </article> --}}
