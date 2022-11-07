<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Recintos;
use Faker\Generator as Faker;

$factory->define(Recintos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->title(),
        'coste_alquiler' => $faker->randomNumber(),
        'precio_entrada' => $faker->randomNumber(),
    ];
});
