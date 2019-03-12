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
        factory(App\Theory::class, 3)->create()->each(function ($theory) {
            for ($i = 0; $i < 10; $i++) {
                /** @var \App\Theory $theory */
                $question = $theory
                    ->questions()
                    ->save(factory(\App\Question::class)->make());

                if ($i < 5) {
                    $question->answers()->save(factory(\App\Answer::class)->make(['type' => 1]));
                } else {
                    for ($k = 0, $kMax = random_int(2, 4); $k < $kMax; $k++) {
                        $question
                            ->answers()
                            ->save(factory(\App\Answer::class)
                                ->make([
                                    'type' => 2,
                                    'is_truth' => !$k
                                ]));
                    }
                }
            }
        });
    }
}
