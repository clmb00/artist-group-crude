@extends('layout.main')

@section('content')

<div class="container">
        <h1>{{ $museum->name }}</h1>
        <h3>{{ $museum->nation }}</h3>
        <h3>{{ $museum->slug }}</h3>
        <h3>{{ $museum->id }}</h3>

        <a class="btn btn-primary" href="{{ route('museums.index') }}">Go Back</a>
    </div>
@endsection
