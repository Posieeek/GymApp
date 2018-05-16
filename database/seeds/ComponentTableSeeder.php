<?php

use Illuminate\Database\Seeder;
use App\Component;
use Faker\Factory as Faker;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('components')->insert([
            'id' => '1',
            'name' => 'Kurczok',
            'weight' => '100',
        ]);

        
    
        //
    }
}

