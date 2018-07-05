<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Superadmin',
            'description' => 'Super rola superadmina',
        
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
        ]);

        //
    }
}
