<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');


Route::get('/student-report', function () {

    $students = DB::select("
    SELECT 
        s.id AS student_id,
        s.name AS student_name,
        s.department,
        s.cgpa,

        COUNT(e.id) AS total_course,
        COALESCE(SUM(c.credits),0) AS total_course_credits,
        SUM(
           CASE
              WHEN e.grade = 'F'
                    THEN 1
                ELSE 0
                END
            ) AS failed_course,

            SUM(
               CASE
                  WHEN e.grade IN (
                'A+',
                'A',
                'A-',
                'B+',
                'B',
                'B-',
                'C+',
                'C',
                'D'
                ) 
                  THEN 1
                  
                  ELSE 0
                END
            ) AS passed_courses,

            ROUND(
                AVG(
                   CASE
                    WHEN e.grade = 'A+' THEN 4.00
                    WHEN e.grade = 'A'  THEN 4.00
                    WHEN e.grade = 'A-' THEN 3.70
                    WHEN e.grade = 'B+' THEN 3.30
                    WHEN e.grade = 'B'  THEN 3.00
                    WHEN e.grade = 'B-' THEN 2.70
                    WHEN e.grade = 'C+' THEN 2.30
                    WHEN e.grade = 'C'  THEN 2.00
                    WHEN e.grade = 'D'  THEN 1.00
                    WHEN e.grade = 'F'  THEN 0.00
                    ELSE NULL
                END
            ),
            2
            ) AS average_grade_point
        FROM students s
        LEFT JOIN enrollments e
    ON e.student_id = s.id
        LEFT JOIN courses c
             ON c.id = e.course_id
        GROUP BY 
              s.id,
              s.name,
              s.department,
              s.cgpa
        ORDER BY 
        s.cgpa DESC;
    ");


    return response()->json($students);
});