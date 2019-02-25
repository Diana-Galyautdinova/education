<?php

use Faker\Generator as Faker;

$factory->define(App\Theory::class, function (Faker $faker) {
    return [
        'visible' => $faker->boolean(80),
        'name' => $faker->sentence(),
        'text' => $faker->sentences(150, true),
    ];
});
