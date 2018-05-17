<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Article');
        for($i = 1; $i <= 10; $i ++)
{

        DB::table('articles')->insert([
            'title' => $faker->sentence(),
            'content' => implode($faker->paragraphs(5)),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            ]);
        //
}
    }
}
