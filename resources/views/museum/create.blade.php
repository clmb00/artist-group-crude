@extends('layout.main')

@section('content')

<div class="container">
        <h1>New Museum</h1>

        <form action="{{ route('museums.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
              <label for="nation" class="form-label">Nazione:</label>
              <input type="text" class="form-control" id="nation" name="nation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
