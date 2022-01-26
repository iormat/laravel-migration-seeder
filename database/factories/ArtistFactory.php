<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstname(),
        'surname' => $faker -> lastname(),
        'stage_name' => $faker -> name(),
        'dateOfBirth' => $faker -> date(),
        'website' => $faker -> url(),
        'bio' => $faker -> text(500), 
    ];
});
