<?php

namespace Database\Seeders;

use App\Models\Demo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 100; $i++){
            $demo = new Demo();
            $demo->name = $faker->name;
            $demo->email = $faker->email;
            $demo->save();
        }

    }
}
