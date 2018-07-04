<?php

use Illuminate\Database\Seeder;
use App\Training;
use Faker\Factory as Faker;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Training');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('trainings')->insert([
           // 'id' => '1',
            //'name' => 'Damiana',
           
            'name' => $faker->word(),
            'owner_id'=>$faker->numberBetween($min = 1, $max = 10),
        ]);
        
        //
    }
}
}