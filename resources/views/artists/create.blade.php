@extends('layout.main')

@section('content')

    <div class="container">

        <h1>Aggiungi nuovo artista</h1>

        <form action="{{ route('artists.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome artista</label>
                <input type="text" class="form-control" id="name" placeholder="Inserisci il nome...">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>


        </form>
    </div>

@endsection
