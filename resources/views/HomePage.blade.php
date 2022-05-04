<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Movies</title>
</head>
<body>
    <h1>Lista dei film</h1>
    @dd($myMovies)
    {{-- <ul>
        @foreach ($myMovies as $movie)
            @dd($movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul> --}}
</body>
</html>