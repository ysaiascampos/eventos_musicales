<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Concierto;
use Faker\Generator as Faker;

$factory->define(Concierto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->title(),
        'numero_espectador' => $faker->randomNumber(),
        'fecha' => $faker->date(),
        'rentabilidad' => $faker->randomNumber(),
        'id_promotor' => $faker->randomNumber(),
        'id_recinto' => $faker->randomNumber(),
        'id_grupo' => $faker->randomNumber(),
        'id_medio' => $faker->randomNumber(),
    ];
});
