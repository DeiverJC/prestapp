<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    return [
        'fist_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'full_name' => $faker->firstName . ' ' . $faker->lastName,
        'dni' => $faker->numberBetween(10000000, 1000000000),
        'cellphone' => $faker->numberBetween(3000000000, 3999999999),
        'address' => $faker->address,
        'bank_id' => $faker->numberBetween(1, 7),
        'company_id' => $faker->numberBetween(1, 7),
    ];
});
