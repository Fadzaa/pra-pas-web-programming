<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Student::create($request->all());
        Session::flash('success', 'Data Siswa Berhasil Ditambahkan!');

    return redirect('/student/all');
    }

    public function create()
    {
        return view('student.create', [
            "title" => "Students",
            "students" => Student::all()
        ]);
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        Session::flash('success', 'Data Siswa Berhasil Dihapus!');

        return redirect('/student/all');
    }

    public function edit(Student $student)
    {
        return view('student.edit', [
            "title" => "Students",
            "student" => $student
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Student::where('id', $student->id)
            ->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
            ]);
        Session::flash('success', 'Data Siswa Berhasil Diubah!');

        return redirect('/student/all');
    }

    
}
