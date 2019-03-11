<?php

use Faker\Generator as Faker;

$factory->define(App\Theory::class, function (Faker $faker) {
    return [
        'visible' => $faker->boolean(80),
        'name' => $faker->sentence(),
        'text' => (function ($faker) {
            $style = implode(';', [
                'float: right',
                'margin: 10px',
                'max-width: 400px',
            ]);
            return '<p>'.
                implode('</p><p>', [
                    $faker->sentences(30, true),
                    sprintf('<img src="https://picsum.photos/200/300" style="%s">', $style),
                    $faker->sentences(120, true),
                    sprintf('<img src="%s" style="%s">', $faker->gif(), $style),
                    $faker->sentences(120, true),
                    sprintf('<video style="%s" controls="controls"><source src="%s" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'></video>', $style, $faker->video()),
                    $faker->sentences(120, true),
                ]).
                '</p>';
        })($faker),
    ];
});
