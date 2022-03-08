

<div></div>
  <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Fumetto</a>
</div>

<table class="table">
  <thead>
    <tr style="text-align: left">
      <th>Nome </th>
      <th>Autore</th>
      <th>Prezzo</th>
      <th>Descrizione</th>
      <th>Nazionalità</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($dati as $comic)
      <tr>
        <td>{{ $comic->name }}</td>
        <td>{{ $comic->author }}</td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->description }}</td>
        <td>{{ $comic->Nationality }}</td>
        <td>
          {{-- <a href="comics/{{$comic->id}}" class="btn btn-link">Dettagli</a> --}}
          <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-link">Dettagli</a>

        </td>
      </tr>
    @endforeach
  </tbody>
</table>



