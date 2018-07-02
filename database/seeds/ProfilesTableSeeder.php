<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\Training;
use App\Trainer;
use App\Diet;
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Profile');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('profiles')->insert([
         /*   'id' => '1',
            'users_id' => '1',
            'name' => 'Maciej',
            'last_name' => 'Zawadzki',
            'height' => '172',
            'weight' => '71',
            'experience' => '4 years',
            'trainers_id' => '1',
            'diets_id' => '1',
            'trainings_id' => '1',
            */

        
            'name' => $faker->name(),
            
            'last_name' => $faker->lastName(),
            'height' => $faker->numberBetween($min = 150, $max = 210),
            'weight' => $faker->numberBetween($min = 50, $max = 120),
            'experience' => $faker->randomDigit." years",
            'user_id' => $i,
            

        ]);

     
     
        }
        //
    }
}
