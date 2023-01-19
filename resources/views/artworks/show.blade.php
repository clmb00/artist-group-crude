@extends('layout.main')

@section('title')
  | Artwork details
@endsection

@section('content')
  <div class="container mt-4">
    {{-- @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif --}}


    <h1 class="my-4">{{ $artwork->name }}</h1>
    <div>Artist: <strong>{{ $artwork->artist_id }}</strong></div>
    <div>Museum: <strong>{{ $artwork->museum_id }}</strong></div>
    <div>Year: <strong>{{ $artwork->year }}</strong></div>
    <a class="btn btn-primary" href="{{ route('artworks.index') }}">Go back to artworks list</a>
  </div>
@endsection
