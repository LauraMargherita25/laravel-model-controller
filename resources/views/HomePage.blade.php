@extends('temeplates.base')

@section('pageTitle', 'Home')

@section('pageMain')
<main>
    <div class="container">
        @foreach ($myMovies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                <h3>{{ $movie->original_title }}</h3>
                <p>{{ $movie->date }}</p>
                <p class="vote">vote: {{ $movie->vote }}</p>
            </div>
        @endforeach
    </div>
</main>
@endsection
