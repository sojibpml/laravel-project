<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professor;
class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professor::insert([
            [
                'name' => 'ড. রহমান',
                'department' => 'CSE',
                'salary' => 120000,
                'hire_date' => '2010-06-15',
            ],
            [
                'name' => 'ড. করিম',
                'department' => 'EEE',
                'salary' => 110000,
                'hire_date' => '2012-08-20',
            ],
            [
                'name' => 'ড. আক্তার',
                'department' => 'Math',
                'salary' => 95000,
                'hire_date' => '2015-01-10',
            ],
            [
                'name' => 'ড. সেন',
                'department' => 'CSE',
                'salary' => 130000,
                'hire_date' => '2008-03-05',
            ],
            [
                'name' => 'ড. হাসান',
                'department' => 'CSE',
                'salary' => 115000,
                'hire_date' => '2014-07-12',
            ],
            [
                'name' => 'ড. নাসির',
                'department' => 'EEE',
                'salary' => 105000,
                'hire_date' => '2016-09-01',
            ],
            [
                'name' => 'ড. সুলতানা',
                'department' => 'Math',
                'salary' => 98000,
                'hire_date' => '2017-02-18',
            ],
            [
                'name' => 'ড. হোসেন',
                'department' => 'Physics',
                'salary' => 100000,
                'hire_date' => '2013-11-25',
            ],
            [
                'name' => 'ড. জাহিদ',
                'department' => 'CSE',
                'salary' => 125000,
                'hire_date' => '2011-05-10',
            ],
            [
                'name' => 'ড. মিতা',
                'department' => 'English',
                'salary' => 90000,
                'hire_date' => '2018-04-22',
            ],
        ]);
    }
}
