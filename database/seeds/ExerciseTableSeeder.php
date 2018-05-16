<?php

use Illuminate\Database\Seeder;
use App\Exercises;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exercises = Exercises::create([
            'id' => '1',
            'name' => 'deadlift',
            'weight' => '120',
            'ex_set' => '5',
            'rep' => '5',
        ]);
        $exercises->save();
        $exercises = Exercises::all();
        //
     //
    }
}
