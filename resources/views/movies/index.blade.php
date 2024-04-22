<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Movies</title>
</head>
<body>
    <h1>List of Movies</h1>

    <ul>
        @foreach($movies as $movie)
            <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>
