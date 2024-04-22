<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $genre->name }}</title>
</head>
<body>
    <h1>{{ $genre->name }}</h1>
    <h2>Movies in this Genre:</h2>
    <ul>
        @foreach($genre->movies as $movie)
        <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>

</body>
</html>
