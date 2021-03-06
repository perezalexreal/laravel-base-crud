  {{-- <h1>Dettagli filiale #{{ Request::route()->parameters["comic"]->id }}</h1> --}}
  <h1>Dettagli fumetto #{{ $comic->id }}</h1>

  {{-- @dump(Request::route()) --}}

  <ul>
    <li><strong>Nome</strong>: {{ $comic->name }}</li>
    <li><strong>Autore</strong>: {{ $comic->author }}</li>
    <li><strong>Prezzo</strong>: {{ $comic->price }}</li>
    <li><strong>Descrizione</strong>: {{ $comic->description }}</li>
    <li><strong>Nazionalit√†</strong>: {{ $comic->Nationality }}</li>
  </ul>


  <a href="{{ route("comics.edit", $comic->id) }}" class="btn btn-link">Modifica</a>
  @include('partials.destroyBtn', [
     'id' => $comic->id,
     'route' => "comics.destroy"
  ])