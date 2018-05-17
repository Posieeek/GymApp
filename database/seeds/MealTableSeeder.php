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
          /*  'id' => '1',
            'name' => 'kurczaczek z woda',
            'calories' => '80',
            'carbohydrates' => '0',
            'fat' => '0',
            'proteins' => '20',
         */
        'name' => $faker->word(),
        'calories' => $faker->numberBetween($min = 100, $max = 2000),
        'carbohydrates' => $faker->numberBetween($min = 1, $max = 400),
        'fat' => $faker->numberBetween($min = 1, $max = 60),
        'proteins' => $faker->numberBetween($min = 1, $max = 200),
        ]);
        
        //
    }
}
}
