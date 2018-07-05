<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'testuser99',
            'email' => 'tu@asd.com',
            'password' => bcrypt('sasasa'),
            'remember_token' => str_random(10),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
        ]);
        
        $faker = Faker::create('App\User');
        for ($i = 1; $i <= 10; $i++) {
            /*  DB::table('users')->insert([
                'id' => '11',
                  'profiles_id' => '11',
                  'email' => 'posieeek@gmail.com',
                  'password' => bcrypt('zxcvb123'),

                  ]);
      */  

            DB::table('users')->insert([
                'username' => $faker->userName . $faker->randomNumber(),
                'email' => $faker->freeEmail(),
                'password' => Hash::make($faker->password()),
                'remember_token' => str_random(10),
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),
            ]);

        }

     

        //
    }
}
