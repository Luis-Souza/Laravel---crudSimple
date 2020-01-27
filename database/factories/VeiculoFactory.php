<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Veiculo;
use Faker\Generator as Faker;

$factory->define(Veiculo::class, function (Faker $faker) {
    return [
        'modelo' => $faker->words(1, true),
        'placa'  => $faker->words(1, true),
        'ano'    => $faker->words(1, true)
    ];
});
