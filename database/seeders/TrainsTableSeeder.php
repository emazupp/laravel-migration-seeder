<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->society = $faker->company();
            $newTrain->departure_station = $faker->state();
            $newTrain->arrive_station = $faker->state();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrive_time = $faker->dateTime();
            $newTrain->carriage_total = $faker->randomDigit();
            $newTrain->price = $faker->randomFloat(2, 10, 9999);
            $newTrain->save();
        }
    }
}
