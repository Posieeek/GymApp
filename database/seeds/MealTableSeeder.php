<?php

use Illuminate\Database\Seeder;
use App\Meal;
use Faker\Factory as Faker;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Component');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('meals')->insert([
            'name' => $faker->word(),
            'diet_id' =>$faker->numberBetween($min = 1, $max = 10),
            'owner_id'=>$faker->numberBetween($min = 1, $max = 10),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
        ]);
        
        //
    }
}
}
