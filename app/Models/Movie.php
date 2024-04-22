<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function addGenre($genreId)
{
    $this->genres()->attach($genreId);
}

public function removeGenre($genreId)
{
    $this->genres()->detach($genreId);
}
}
