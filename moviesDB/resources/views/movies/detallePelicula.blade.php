@extends('layouts.plantilla')


@section('content')
<section class="col-12 col-sm-12 col-md-9">
  <div class="row">

    <article class="product pt-5">
        <header>
          <img src="/storage/{{$pelicula->poster}}" alt="">
        </header>

        <div class="content">
            <h1>{{$pelicula->title}}</h1>
            @foreach ($pelicula->actors as $actor)
              <p>{{$actor->first_name}} {{$actor->last_name}} </p>
            @endforeach
            <p></p>
            <p></p>
            {{-- <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
            <div style="top: 43px" class="type small">XXL</div> --}}
        </div>

        <footer class="content">
            {{-- <span class="qt-minus">-</span> --}}
            <span class="qt ml-2">
               {{$pelicula->genre->name ?? ''}}</span>
            {{-- <span class="qt-plus">+</span> --}}
            <h2 class="full-price">
              <form class="" action="/" method="get">
              @csrf
                {{-- <input type="hidden" name="id" value="{{$pelicula->id}}"> --}}
                <button type="submit" class="btn btn-primaryF pb-3" name="button">Volver</button>
              </form>
            </h2>

            <h2 class="price">

            </h2>
        </footer>
      {{-- @empty
        <h2>Su carrito se encuentra vacio</h2> --}}

    </article>

  </div>
</section>

</main>
<div class="mb-5">

</div>
@endsection
