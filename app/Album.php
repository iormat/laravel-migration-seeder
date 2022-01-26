<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'release',
        'genre',
        'view',
        'sells',
    ];
}
