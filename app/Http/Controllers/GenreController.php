<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function show($id)
    {
        $genre = Genre::with('movies')->findOrFail($id);
        return view('genres.show', compact('genre'));
    }
}
