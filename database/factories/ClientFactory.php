<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'ocupation' => $faker->jobTitle,
        'email' => $faker->unique()->safeEmail
    ];
});
