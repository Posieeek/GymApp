<?php

use Illuminate\Database\Seeder;
use App\Trainer;
use Faker\Factory as Faker;

class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Trainer');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('trainers')->insert([
            
            'name' => $faker->name(),
            'last_name' => $faker->lastName(),
            'experience_as_trainer' => $faker->randomDigit." years",
            'certificate' => $faker->titleMale(),   
        ]);
        
        //
    }
}
}