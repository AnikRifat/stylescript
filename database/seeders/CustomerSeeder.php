<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 12; $i <= 51; $i++) {
            DB::table('customer_information')->insert([
                'user_id' => $i,
                'image' => 'customer.png',
                'file' => '1684483679_file.jpg',
                'birthday' => '2000-05-19',
                'address' => 'newyork california',
                'current_class' => $faker->randomElement(['Hsc', 'SSC']),
                'current_school' => 'University of Harvard',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
