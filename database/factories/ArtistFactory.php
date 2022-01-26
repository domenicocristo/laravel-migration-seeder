<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;

use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {

    return [
        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'stageName' => $faker -> name(),
        'dateOfBirth' => $faker -> date(),
    ];
});