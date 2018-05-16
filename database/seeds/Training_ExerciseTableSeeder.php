<?php

use Illuminate\Database\Seeder;
use App\Training_Exercise;

class Training_ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_exercises')->insert([
            'id' => '1',
            'trainings_id' => '1',
            'exercises_id' => '1',
        ]);
     
        //
    }
}
