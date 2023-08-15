<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DonorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 1; $i <= 50; $i++) {
            DB::table('donors')->insert([
                'First_Name' => $faker->firstName,
                'Last_Name' => $faker->lastName,
                'Blood_Type' => $faker->randomElement(['A','B', 'O', 'AB']),
                'DOB' => $faker->date,
                'Gender' => $faker->randomElement(['Male(Nam)','Nữ(Female)']),
                'Address' => $faker->address,
                'Contact_Number' => $faker->phoneNumber,
            ]);
        }
    }
}
