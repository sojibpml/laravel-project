<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Courses
        $this->call([
            ProfessorSeeder::class,
            StudentSeeder::class,
            CourseSeeder::class,
            EnrollmentSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
        ]);
    }
}