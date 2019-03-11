<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker, $attributes = []) {
    return [
        'text' => $faker->word,
        'type' => $attributes['type'] ?? $faker->numberBetween(1, 2),
    ];
});
