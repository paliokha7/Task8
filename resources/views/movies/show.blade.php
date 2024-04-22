<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }}</title>
</head>
<body>
    <h1>{{ $movie->title }}</h1>
    <p>Description: {{ $movie->description }}</p>

    <h2>Genres:</h2>
    <ul>
        @foreach($movie->genres as $genre)
            <li>{{ $genre->name }}</li>
        @endforeach
    </ul>
</body>
</html>
