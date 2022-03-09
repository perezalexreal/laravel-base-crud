<h1>Inserisci fumetto nel database</h1>
<form action="{{ route('comics.store') }}" method="post" class="row g-3">
  @csrf

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="mb-3">
    <label class="form-label">Autore</label>
    <input type="text" class="form-control" name="author">
  </div>

  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="number" class="form-control" name="price" min="1" max="99999">
  </div>

  <div class="mb-3">
    <label class="form-label">Descrizione fumetto</label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Nazionalita</label>
    <input type="text" class="form-control" name="nationality">
  </div>

  <div class="d-flex">
    <button class="btn btn-outline-secondary me-3" type="reset">Svuota dati</button>
    <button class="btn btn-success" type="submit">Crea</button>
  </div>
</form>