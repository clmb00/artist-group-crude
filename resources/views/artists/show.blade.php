@extends('layout.main')

@section('content')

<div class="container">

    <h1>Artista: {{ $artist->name; }}</h1>

    <a href="{{ route('artists.index') }}" class="btn btn-primary">Torna alla lista</a>
</div>

@endsection
