@extends('layout.main')

@section('content')
  <div class="container">
    <h1 class="my-4">Update artwork: {{ $artwork->name }}</h1>

    {{-- @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}

    <form action="{{ route('artworks.store', $artwork) }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Artwork name*</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
          value="{{ old('name', $artwork->name) }}" placeholder="Add artwork name">
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="artist_id" class="form-label">Artist ID*</label>
        <input type="text" class="form-control @error('artist_id') is-invalid @enderror" name="artist_id"
          id="artist_id" value="{{ old('artist_id', $artwork->artist_id) }}" placeholder="Add artist id">
        @error('artist_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>


      <div class="mb-3">
        <label for="museum_id" class="form-label">Museum ID*</label>
        <input type="text" class="form-control @error('museum_id') is-invalid @enderror" name="museum_id"
          id="museum_id" value="{{ old('museum_id', $artwork->museum_id) }}" placeholder="Add museum id">
        @error('museum_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="year" class="form-label">Year*</label>
        <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year"
          value="{{ old('year', $artwork->year) }}" placeholder="Add year">
        @error('year')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary mb-5">Submit</button>

    </form>
  </div>
@endsection
