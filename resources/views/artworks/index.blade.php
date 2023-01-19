@extends('layout.main')

@section('title')
  | Artworks
@endsection

@section('content')
  <div class="container">
    <h1 class="my-5">Artworks list</h1>
    <a class="btn btn-primary" href="{{ route('artworks.create') }}">Add new artwork</a>

    <table class="table table-striped mt-4">
      <thead>
        <tr>
          <th scope="col">
            <a class="text-dark" href="#">ID</a>
          </th>
          <th scope="col">
            <a class="text-dark" href="#">Artwork name</a>
          </th>
          <th scope="col"><a class="text-dark" href="#">Artist ID</a>
          </th>
          <th scope="col"><a class="text-dark" href="#">Museum ID</a>
          </th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($artworks as $artwork)
          <tr>
            <td>{{ $artwork->id }}</td>
            <td>{{ $artwork->name }}</td>
            <td>{{ $artwork->artist_id }}</td>
            <td>{{ $artwork->museum_id }}</td>
            <td>
              <a href="{{ route('artworks.show', $artwork) }}" class="btn btn-primary">
                <i class="fa-regular fa-eye">Show</i>
              </a>
              <a href="{{ route('artworks.edit', $artwork) }}" class="btn btn-warning mx-2">
                <i class="fa-solid fa-pen-to-square">Edit</i>
              </a>
              {{-- @include('admin.partials.form-delete', ['artwork' => $artwork]) --}}
            </td>
          </tr>
        @empty
          <h1>No artworks</h1>
        @endforelse
      </tbody>
    </table>

    {{-- {{ $artwokrs->links() }} --}}
  </div>
@endsection
