<?php

use Illuminate\Database\Seeder;
use App\Exercise;
use Faker\Factory as Faker;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Exercise');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('exercises')->insert([
           /* 'id' => '1',
            'name' => 'deadlift',
            'weight' => '120',
            'ex_set' => '5',
            'rep' => '5',
        */
        'name' => $faker->word(),
        'weight' => $faker->numberBetween($min = 1, $max = 200),
        'ex_set' => $faker->numberBetween($min = 1, $max = 5),
        'rep' => $faker->numberBetween($min = 1, $max = 12),
        'owner_id'=>$faker->numberBetween($min = 1, $max = 10),
        'updated_at' => \Carbon\Carbon::now(),
        'created_at' => \Carbon\Carbon::now(),
            ]);
     
        //
     //
    }
    }
}
