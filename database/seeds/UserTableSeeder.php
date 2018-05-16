<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'id' => '1',
            'profiles_id' => '1',
            'email' => 'posieeek@gmail.com',
            'password' => bcrypt('zxcvb123'),
        ]);

     
      
        //
    }
}
