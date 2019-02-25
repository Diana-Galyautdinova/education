<?php

use Illuminate\Database\Seeder;

class TheorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Theory::class, 50)->create();
    }
}
