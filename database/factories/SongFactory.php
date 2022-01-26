<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {

    return [
        'title' => $faker -> name(),
        'artist' => $faker -> name(),
        'genre' => $faker->word(),
        'duration' => $faker -> numberBetween(30, 600)
    ];
});