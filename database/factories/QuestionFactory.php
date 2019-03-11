<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'text' => $faker->sentences(5, true),
    ];
});
