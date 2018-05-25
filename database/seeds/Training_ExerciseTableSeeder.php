<?php

use Illuminate\Database\Seeder;
use App\Training_Exercise;
use Faker\Factory as Faker;

class Training_ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Training_Exercise');
        for($i = 1; $i <= 20; $i ++)
        {
        DB::table('training_exercises')->insert([
           /* 'id' => '1',
            'trainings_id' => '1',
            'exercises_id' => '1', */
        'training_id' => $faker->numberBetween($min = 1, $max = 10),
            'exercise_id' => $faker->numberBetween($min = 1, $max = 10),
       
            ]);
     
        //
    }
}
}