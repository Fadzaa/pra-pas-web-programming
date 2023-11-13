<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
     public function index()
    {
        return view('student.all', [
            "title" => "Students",
            "students" => Student::all()
        ]);
    }

    public function show(Student $student)
    {
        return view('student.detail', [
            "title" => "Student Detail",
            "student" => $student
        ]);
    }
}
