<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('companies')->insert([
                'name' => $faker->company,
                'email' => $faker->companyEmail,
                'website' => $faker->url,
                'location' => $faker->city . ', ' . $faker->stateAbbr,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
