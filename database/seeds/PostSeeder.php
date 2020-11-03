<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();
       for ($i=0;$i <=50;$i++){
           \App\Models\Post::create([
               'title' =>$faker->name,
               'description' =>$faker->text,
               'published_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null)
           ]);
       }
    }
}
