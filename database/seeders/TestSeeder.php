<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for($i=1; $i<=100; $i++ ){
            $test = new Test();
            $test->name = $faker->name;
            $test->email = $faker->email;
            $test->address = $faker->address;
            $test->phone = $faker->phoneNumber;
            $test->save();
        }



    }
}
