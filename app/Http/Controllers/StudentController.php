<?php

namespace App\Http\Controllers;

use App\Contracts\AppConstants;
use App\Services\StudentService;
class StudentController extends Controller
{
    public function __construct(protected StudentService $studentService)
    {
    }
    public function index()
    {
        $students = $this->studentService->getAllStudents();
        return view('students.index', [
            'students' => $students,
            'title' => AppConstants::STUDENT_LIST,
        ]);
    }
}
