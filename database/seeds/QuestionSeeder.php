<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Question::class, 10)->create()->each(function ($question) {
            for($i=0; $i<rand(0, 5); $i++) {
                $question->answers()->save(factory(App\Answer::class)->make());
            }
        });
    }
}
