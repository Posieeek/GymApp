<?php

use Illuminate\Database\Seeder;
use App\Training_Exercises;

class Training_ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $training_exercises = Training_Exercises::create([
            'id' => '1',
            'trainings_id' => '1',
            'exercises_id' => '1',
        ]);
        $training_exercises->save();

        $Training_Exercises = Training_Exercises::all();
        //
    }
}
