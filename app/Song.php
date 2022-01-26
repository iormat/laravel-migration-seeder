<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'duration',
        'lyrics',
        'rating',
        'explicit',
        'genre'
    ];
}
