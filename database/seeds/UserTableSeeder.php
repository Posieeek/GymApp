<?php

use Illuminate\Database\Seeder;
use App\Users;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Users::create([
            'id' => '1',
            'profiles_id' => '1',
            'email' => 'posieeek@gmail.com',
            'password' => bcrypt('zxcvb123'),
        ]);
        $users->save();

        $users = Users::all();
        //
    }
}
