<?php

namespace App\Providers;

use App\Services\Faker\Provider\Gif;
use App\Services\Faker\Provider\Video;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $faker = app(Generator::class);

        $faker->addProvider(new Gif($faker));
        $faker->addProvider(new Video($faker));
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
