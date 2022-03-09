<form action="{{ route($route /* "comics.desotroy" */, $id /* "$comic->id*/) }}" method="post" id="delete_form_{{ $id }}">
    @csrf
    @method("delete")
  
    <button class="btn btn-danger" type="submit">Elimina</button>
  </form>