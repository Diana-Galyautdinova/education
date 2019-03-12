<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker, $attributes = []) {
    $attributes += [
        'type' => $faker->numberBetween(1, 2),
    ];

    return [
        'text' => $faker->word,
        'type' => $attributes['type'],
        'is_truth' => $attributes['type'] === 1 ? true : $attributes['is_truth'],
    ];
});
