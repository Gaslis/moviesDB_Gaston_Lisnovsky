@extends('layouts.plantilla')
@section('content')

    <h2 class="text-center py-4">{{$genero->name}}</h2>



          <section id="cart">
            @foreach ($genero->movies as $movie)


                <div class="container pt-3 mb-5 col-12 col-sm-12 col-md-9">
                  <div class="row justify-content-center">
                  {{-- </main> --}}
                  <div class="card mb-3" style="width: 540px;">
                    <div class="row no-gutters" >
                      <div class="col-md-6">
                        <img src="/storage/{{$movie->poster}}" class="card-img" alt="..." >
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <h2 class="card-title">
                            <a href="/movies/detallePelicula/{{ $movie->id }}" class="btn3">{{$movie->title}}
                            </a>
                              <span class="badge"> {{$movie->rating}}</span></h2>
                          <h4>Actores</h4>
                          @foreach ($movie->actors as $actor)
                            <p class="card-text">{{$actor->first_name}} {{$actor->last_name}}</p>
                          @endforeach
                          <p class="card-text"><small class="text-muted">Duracion: {{$movie->length ?? ''}} min ||  <a href="/genres/listadoXgenero/{{$movie->genre->id }}">{{$movie->genre->name ?? ''}}</a> </small></p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            @endforeach
          </section>


    </div>


@endsection
