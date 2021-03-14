<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <=  100; $i++) {
            \App\Models\City::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
            ]);
        }
    }
}
