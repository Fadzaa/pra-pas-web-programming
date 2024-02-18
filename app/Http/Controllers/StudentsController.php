<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Kelas;
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

    public function show($student)
    {
        return view('student.detail', [
            "title" => "Student Detail",
            "student" => Student::find($student)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
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
    "title" => "create-student",
    "kelas" => Kelas::all()
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
            "student" => $student,
                 "kelas" => Kelas::all()
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas_id'      => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Student::where('id', $student->id)
            ->update($validateData);
        Session::flash('success', 'Data Siswa Berhasil Diubah!');

        return redirect('/student/all');
    }


}
