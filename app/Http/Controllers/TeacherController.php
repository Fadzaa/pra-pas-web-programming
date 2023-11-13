<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.all', [
            "title" => "Teachers",
            "teachers" => Teacher::all()
        ]);
    }

    public function show(Teacher $teacher)
    {
        return view('teacher.detail', [
            "title" => "Teacher Detail",
            "teacher" => $teacher
        ]);
    }
}
