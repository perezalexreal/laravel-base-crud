<h1>Inserisci fumetto nel database</h1>
<form action="{{ route('comics.update', $comic->id) }}" method="post" class="row g-3">
  @csrf
  @method('put')

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" value="{{ $comic->name}}">
  </div>

  <div class="mb-3">
    <label class="form-label">Autore</label>
    <input type="text" class="form-control" name="author" value="{{ $comic->author}}">
  </div>

  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="number" class="form-control" name="price" value="{{ $comic->price}}" min="1" max="99999" >
  </div>

  <div class="mb-3">
    <label class="form-label">Descrizione fumetto</label>
    <textarea class="form-control" name="description" cols="30" rows="10" >{{ $comic->description}}</textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Nazionalita</label>
    <input type="text" class="form-control" name="nationality"value="{{ $comic->Nationality}}">
  </div>

  <div class="d-flex">
    <button class="btn btn-outline-secondary me-3" type="reset">Svuota dati</button>
    <button class="btn btn-success" type="submit">Crea</button>
  </div>
</form>