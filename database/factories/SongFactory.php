<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Song;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'duration' => $faker -> numberBetween(30, 800),
        'lyrics' => $faker -> text(200),
        'rating' => $faker -> numberBetween(1, 10),
        'explicit' => $faker -> boolean(),
        'genre' => $faker -> word()
    ];
});
