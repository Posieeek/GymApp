<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\User');
        for($i = 1; $i <= 10; $i ++)
        {
      /*  DB::table('users')->insert([
          'id' => '11',
            'profiles_id' => '11',
            'email' => 'posieeek@gmail.com',
            'password' => bcrypt('zxcvb123'),
           
            ]);
*/
            DB::table('users')->insert([
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
