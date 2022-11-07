<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Grupos;
use Faker\Generator as Faker;

$factory->define(Grupos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->title(),
        'cache' => $faker->randomNumber(),
    ];
});
