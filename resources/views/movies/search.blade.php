<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    @if ($movies->isEmpty())
        <p>No movies found.</p>
    @else
        <ul>
            @foreach($movies as $movie)
                <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
            @endforeach
        </ul>
    @endif
</body>
</html>
