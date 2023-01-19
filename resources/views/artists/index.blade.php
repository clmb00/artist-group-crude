@extends('layout.main')

@section('content')

<div class="container">

    <h1>Artists</h1>

    <a href="{{ route('artists.create') }}" class="btn btn-success">Aggiungi artista</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($artists as $artist)
            <tr>
                <td>{{ $artist->id }}</td>
                <td>{{ $artist->name }}</td>
                <td>
                    <a href="{{ route('artists.show', $artist) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                </td>
            </tr>

        @empty

            <h2>Nessun artista presente</h2>

        @endforelse
        </tbody>
      </table>

</div>

@endsection
