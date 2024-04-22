<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function cast()
    {
        return $this->belongsTo(Movie::class);
    }
}
