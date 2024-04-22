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

    <h2>Genre:</h2>
    <ul>
        @foreach($movie->genres as $genre)
        <li><a href="{{ route('genres.show', $genre->id) }}">{{ $genre->name }}</a></li>
        @endforeach
    </ul>
    <h2>Actors:</h2>
    <ul>
        @foreach($actors as $actor)
            <li>{{ $actor->name }}</li>
        @endforeach
    </ul>
</body>
</html>
