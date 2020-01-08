<main class="row pl-2 pr-1">
  <aside class="col-sm-2 col-md-2 mt-5">
    @foreach ($genres as  $genre)
      <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-link">
          <a href="/genres/listadoXgenero/{{ $genre->id }}" class="btn">{{ $genre->name }}</a>
        </button>
      </div>
    @endforeach
  </aside>
