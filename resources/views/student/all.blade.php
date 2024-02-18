@extends('layouts.main')

@section('container')

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

 
    <h1>Ini halaman Student</h1>
    <br>
    <br>
    <a href="/student/create"><button>Tambah Data</button></a>
   
    <br>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{$student["nis"]}}</td>
      <td>{{$student["nama"]}}</td>
      <td>{{$student->kelas->nama}}</td>
      <td>{{$student["tanggal_lahir"]}}</td>
      <td>
        <div style="display: flex; gap: 10px;">
          <a type="button" class="btn btn-primary" href="/student/detail/{{$student -> id}}">Detail</a>
          <a type="button" class="btn btn-warning" href="/student/edit/{{$student -> id}}">Edit</a>
          <form action="/student/delete/{{$student -> id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
            @method('delete')
            @csrf
            <button class="btn btn-danger">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection