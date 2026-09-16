<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::insert([
            [
                'name' => 'আলিফ',
                'department' => 'CSE',
                'credit_completed' => 90,
                'cgpa' => 3.80,
                'advisor_id' => 1,
            ],
            [
                'name' => 'বৃষ্টি',
                'department' => 'EEE',
                'credit_completed' => 75,
                'cgpa' => 3.20,
                'advisor_id' => 2,
            ],
            [
                'name' => 'চয়ন',
                'department' => 'CSE',
                'credit_completed' => 45,
                'cgpa' => 2.90,
                'advisor_id' => 4,
            ],
            [
                'name' => 'দীপ্ত',
                'department' => 'Math',
                'credit_completed' => 60,
                'cgpa' => 3.50,
                'advisor_id' => 3,
            ],
            [
                'name' => 'ইভা',
                'department' => 'CSE',
                'credit_completed' => 105,
                'cgpa' => 3.95,
                'advisor_id' => 1,
            ],
            [
                'name' => 'ফারহান',
                'department' => 'EEE',
                'credit_completed' => 30,
                'cgpa' => 2.50,
                'advisor_id' => 2,
            ],
            [
                'name' => 'সাকিব',
                'department' => 'CSE',
                'credit_completed' => 84,
                'cgpa' => 3.65,
                'advisor_id' => 5,
            ],
            [
                'name' => 'নাঈম',
                'department' => 'Math',
                'credit_completed' => 72,
                'cgpa' => 3.40,
                'advisor_id' => 3,
            ],
            [
                'name' => 'তানভীর',
                'department' => 'Physics',
                'credit_completed' => 66,
                'cgpa' => 3.10,
                'advisor_id' => 8,
            ],
            [
                'name' => 'মেহেদী',
                'department' => 'CSE',
                'credit_completed' => 96,
                'cgpa' => 3.75,
                'advisor_id' => 9,
            ],
            [
                'name' => 'রাকিব',
                'department' => 'EEE',
                'credit_completed' => 54,
                'cgpa' => 2.85,
                'advisor_id' => 6,
            ],
            [
                'name' => 'শাওন',
                'department' => 'CSE',
                'credit_completed' => 78,
                'cgpa' => 3.30,
                'advisor_id' => 5,
            ],
            [
                'name' => 'মিম',
                'department' => 'English',
                'credit_completed' => 63,
                'cgpa' => 3.60,
                'advisor_id' => 10,
            ],
            [
                'name' => 'সুমাইয়া',
                'department' => 'Math',
                'credit_completed' => 81,
                'cgpa' => 3.85,
                'advisor_id' => 7,
            ],
            [
                'name' => 'রিফাত',
                'department' => 'CSE',
                'credit_completed' => 36,
                'cgpa' => 2.70,
                'advisor_id' => 4,
            ],
            [
                'name' => 'আরিফ',
                'department' => 'EEE',
                'credit_completed' => 99,
                'cgpa' => 3.70,
                'advisor_id' => 2,
            ],
            [
                'name' => 'জিসান',
                'department' => 'Physics',
                'credit_completed' => 48,
                'cgpa' => 3.00,
                'advisor_id' => 8,
            ],
            [
                'name' => 'নুসরাত',
                'department' => 'CSE',
                'credit_completed' => 108,
                'cgpa' => 3.92,
                'advisor_id' => 9,
            ],
            [
                'name' => 'তৌহিদ',
                'department' => 'English',
                'credit_completed' => 57,
                'cgpa' => 3.15,
                'advisor_id' => 10,
            ],
            [
                'name' => 'লামিয়া',
                'department' => 'Math',
                'credit_completed' => 69,
                'cgpa' => 3.55,
                'advisor_id' => 7,
            ],
        ]);
    }
}