<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $accommodations = [
            "Wheelchair accessible office", "Screen reader friendly software", "Flexible work hours", 
            "Work from home", "Adaptable hours", "Accessible communication tools", "Ergonomic office setup", 
            "Remote work flexibility", "On-site assistance", "Large-print materials available", 
            "Sensory-friendly workspace"
        ];

        $disabilities_supported = [
            "Mobility Impairment", "Visual Impairment", "Hearing Impairment", "Cognitive Disability", 
            "Autism Spectrum Disorder", "Speech Impairment", "Chronic Illness"
        ];

        // Get all company IDs
        $companyIds = DB::table('companies')->pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            DB::table('jobs')->insert([
                'company_id' => $faker->randomElement($companyIds),  // Assign a random company to each job
                'job_title' => $faker->jobTitle,
                'location' => $faker->city . ', ' . $faker->stateAbbr,
                'remote' => $faker->boolean,
                'disability_friendly' => $faker->randomElement($accommodations),
                'job_type' => $faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Internship']),
                'salary_range' => $faker->randomElement(['$40,000 - $50,000', '$50,000 - $60,000', '$70,000 - $80,000']),
                'job_description' => $faker->paragraph,
                'required_skills' => implode(', ', $faker->words($nb = 4)),
                'disability_types_supported' => implode(', ', $faker->randomElements($disabilities_supported, $count = 2)),
                'application_deadline' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
                'contact_email' => $faker->companyEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
