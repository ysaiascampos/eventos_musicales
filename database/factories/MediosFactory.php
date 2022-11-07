<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medios;
use Faker\Generator as Faker;

$factory->define(Medios::class, function (Faker $faker) {
    return [
        'nombre' => $faker->title(),
    ];
});
