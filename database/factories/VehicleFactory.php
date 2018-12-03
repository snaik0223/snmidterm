<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicle::class, function (Faker $faker) {
    return [
                'make' => $faker->randomElement(['Ford' ,'Honda', 'Toyota']),
                'model' => $faker->company,
                'year' => $faker->year,
            ];
});
