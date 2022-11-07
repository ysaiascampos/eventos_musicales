<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Promotores;
use Faker\Generator as Faker;

$factory->define(Promotores::class, function (Faker $faker) {
    return [
        'nombre' => $faker->title(),
    ];
});
