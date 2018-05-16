<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'id' => '1',
            'users_id' => '1',
            'name' => 'Maciej',
            'last_name' => 'Zawadzki',
            'height' => '172',
            'weight' => '71',
            'experience' => '4 years',
            'trainers_id' => '1',
            'diets_id' => '1',
            'trainings_id' => '1',
        ]);
     

        //
    }
}
