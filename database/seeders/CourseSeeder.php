<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::insert([
            [
                'title' => 'ডেটা স্ট্রাকচার',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 1,
            ],
            [
                'title' => 'অ্যালগরিদম',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 4,
            ],
            [
                'title' => 'সার্কিট অ্যানালাইসিস',
                'credits' => 3,
                'department' => 'EEE',
                'professor_id' => 2,
            ],
            [
                'title' => 'ডিফারেনশিয়াল সমীকরণ',
                'credits' => 3,
                'department' => 'Math',
                'professor_id' => 3,
            ],
            [
                'title' => 'ডেটাবেস',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 1,
            ],
            [
                'title' => 'মেশিন লার্নিং',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 4,
            ],
            [
                'title' => 'ওয়েব প্রোগ্রামিং',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 5,
            ],
            [
                'title' => 'অপারেটিং সিস্টেম',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 9,
            ],
            [
                'title' => 'কম্পিউটার নেটওয়ার্ক',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 5,
            ],
            [
                'title' => 'ডিজিটাল ইলেকট্রনিক্স',
                'credits' => 3,
                'department' => 'EEE',
                'professor_id' => 6,
            ],
            [
                'title' => 'ফিন্যান্সিয়াল ম্যাথ',
                'credits' => 3,
                'department' => 'Math',
                'professor_id' => 7,
            ],
            [
                'title' => 'ক্যালকুলাস',
                'credits' => 4,
                'department' => 'Math',
                'professor_id' => 3,
            ],
            [
                'title' => 'কোয়ান্টাম ফিজিক্স',
                'credits' => 3,
                'department' => 'Physics',
                'professor_id' => 8,
            ],
            [
                'title' => 'ইংরেজি কমিউনিকেশন',
                'credits' => 3,
                'department' => 'English',
                'professor_id' => 10,
            ],
            [
                'title' => 'সফটওয়্যার ইঞ্জিনিয়ারিং',
                'credits' => 3,
                'department' => 'CSE',
                'professor_id' => 9,
            ],
        ]);
    }
}