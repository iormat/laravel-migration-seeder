<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'release' => $faker -> date(),
        'genre' => $faker -> word(),
        'view' => $faker -> numberBetween(0, 100000),
        'sells' => $faker -> numberBetween(0, 100000)
    ];
});
