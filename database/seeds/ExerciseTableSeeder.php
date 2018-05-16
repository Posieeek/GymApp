<?php

use Illuminate\Database\Seeder;
use App\Exercise;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'id' => '1',
            'name' => 'deadlift',
            'weight' => '120',
            'ex_set' => '5',
            'rep' => '5',
        ]);
     
        //
     //
    }
}
