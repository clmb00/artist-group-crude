@extends('layout.main')

@section('content')

<div class="container">
        <h1>Edita {{$museum->name}}</h1>

        <form action="{{ route('museums.update', $museum) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="name" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $museum->name }}">
            </div>
            <div class="mb-3">
              <label for="nation" class="form-label">Nazione:</label>
              <input type="text" class="form-control" value="{{ $museum->nation }}" id="nation" name="nation">
            </div>
            <button type="submit" class="btn btn-warning">Edita</button>
        </form>
    </div>
@endsection
