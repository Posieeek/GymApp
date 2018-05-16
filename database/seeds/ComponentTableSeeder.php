<?php

use Illuminate\Database\Seeder;
use App\Component;

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
            'name' => 'kurczak',
            'weight' => '100',
        ]);
    
        //
    }
}

