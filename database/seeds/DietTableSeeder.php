<?php

use Illuminate\Database\Seeder;
use App\Diet;
use Faker\Factory as Faker;

class DietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Diet');
        for($i = 1; $i <= 11; $i ++)
        {
        DB::table('diets')->insert([
          
            'name' => $faker->word(),
            'owner_id'=>$faker->numberBetween($min = 1, $max = 10),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
        ]);
       
        //
    }
}
}
