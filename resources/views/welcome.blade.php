@extends('layout.main')

@section('content')
    <h1>Welcome!</h1>
    <a href="{{ route('artists.index') }}">Vai a Artisti</a>
    <a href="{{ route('museums.index') }}">Vai a Musei</a>
    <a href="{{ route('artworks.index') }}">Vai a Artworks</a>
@endsection
