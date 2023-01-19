<form onsubmit="return confirm('Do you want to delete {{ $artwork->name }}?')" class="d-inline"
  action="{{ route('artworks.destroy', $artwork) }}" method="POST">
  @csrf
  @method('DELETE')

  <button type="submit" class="btn btn-danger" title="delete">
    <i class="fa-solid fa-trash">Delete</i>
  </button>
</form>
