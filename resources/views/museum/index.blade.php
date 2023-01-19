@extends('layout.main')

@section('content')

<div class="container">
        <h1>Museums</h1>

        <a class="btn btn-success my-4" href="{{ route('museums.create') }}">Create New</a>

        <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Nation</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($museums as $museum)
                <tr>
                    <td>{{ $museum->id }}</td>
                    <td>{{ $museum->name }}</td>
                    <td>{{ $museum->nation }}</td>
                    <td class="d-flex">
                        <a class="btn btn-primary" href="{{ route('museums.show', $museum) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('museums.edit', $museum) }}">Edit</a>
                        <form action="{{ route('museums.destroy', $museum) }}" method="POST" onsubmit="return confirm('Confermi leliminazione?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <h2>Nessun museo</h2>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
