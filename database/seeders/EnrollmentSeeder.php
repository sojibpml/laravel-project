<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [1, 1, 'Spring-2026', 'A'],
            [1, 2, 'Spring-2026', 'A-'],
            [1, 5, 'Fall-2025', 'B+'],
            [1, 6, 'Fall-2025', 'A'],

            [2, 3, 'Spring-2026', 'B'],
            [2, 10, 'Spring-2026', 'B+'],
            [2, 6, 'Fall-2025', 'C+'],

            [3, 1, 'Spring-2026', 'C'],
            [3, 5, 'Spring-2026', 'D'],
            [3, 7, 'Fall-2025', 'C+'],

            [4, 4, 'Spring-2026', 'A'],
            [4, 11, 'Spring-2026', 'A-'],
            [4, 12, 'Fall-2025', 'B'],

            [5, 1, 'Spring-2026', 'A+'],
            [5, 2, 'Spring-2026', 'A'],
            [5, 6, 'Spring-2026', 'A-'],
            [5, 8, 'Fall-2025', 'A'],

            [6, 3, 'Spring-2026', 'F'],
            [6, 10, 'Spring-2026', 'C'],

            [7, 1, 'Spring-2026', 'A'],
            [7, 7, 'Spring-2026', 'A-'],
            [7, 9, 'Fall-2025', 'B+'],

            [8, 4, 'Spring-2026', 'B+'],
            [8, 11, 'Spring-2026', 'A'],
            [8, 12, 'Fall-2025', 'A-'],

            [9, 13, 'Spring-2026', 'B'],
            [9, 4, 'Fall-2025', 'B+'],

            [10, 5, 'Spring-2026', 'A'],
            [10, 8, 'Spring-2026', 'A-'],
            [10, 15, 'Fall-2025', 'A'],

            [11, 3, 'Spring-2026', 'C+'],
            [11, 10, 'Spring-2026', 'B'],

            [12, 2, 'Spring-2026', 'B+'],
            [12, 7, 'Spring-2026', 'A'],
            [12, 9, 'Fall-2025', 'B'],

            [13, 14, 'Spring-2026', 'A'],
            [13, 14, 'Fall-2025', 'A-'],

            [14, 4, 'Spring-2026', 'A+'],
            [14, 11, 'Spring-2026', 'A'],
            [14, 12, 'Fall-2025', 'A'],

            [15, 1, 'Spring-2026', 'C'],
            [15, 2, 'Spring-2026', 'C+'],

            [16, 3, 'Spring-2026', 'A-'],
            [16, 10, 'Spring-2026', 'B+'],

            [17, 13, 'Spring-2026', 'B'],
            [17, 4, 'Fall-2025', 'C+'],

            [18, 1, 'Spring-2026', 'A+'],
            [18, 2, 'Spring-2026', 'A+'],
            [18, 6, 'Spring-2026', 'A'],
            [18, 15, 'Fall-2025', 'A+'],

            [19, 14, 'Spring-2026', 'B+'],
            [19, 15, 'Fall-2025', 'B'],

            [20, 4, 'Spring-2026', 'A-'],
            [20, 11, 'Spring-2026', 'A'],
            [20, 12, 'Fall-2025', 'B+'],
        ];

        foreach ($data as [$studentId, $courseId, $semester, $grade]) {
            Enrollment::create([
                'student_id' => $studentId,
                'course_id' => $courseId,
                'semester' => $semester,
                'grade' => $grade,
            ]);
        }
    }
}