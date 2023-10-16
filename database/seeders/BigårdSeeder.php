<?php

namespace Database\Seeders;

use App\Models\Bigård;
use Illuminate\Database\Seeder;

// Adjust the namespace and model name as per your application
class BigårdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; ++$i) {
            Bigård::create([
                'navn' => $faker->name,
                'bruker_idBruker' => $faker->numberBetween(1, 100),
                'adresse' => $faker->address,
            ]);
        }
    }
}
