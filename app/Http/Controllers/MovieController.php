<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller

{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::with(['genres', 'actors'])->findOrFail($id);
        
        $genres = $movie->genres;
        $actors = $movie->actors;
        return view('movies.show', compact('movie', 'genres', 'actors'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $movies = Movie::where('title', 'LIKE', "%$searchTerm%")->get();
        return view('movies.search', compact('movies'));
    }


    
}
