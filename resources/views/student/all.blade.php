@extends('layouts.main')

@section('container')
    <h1>Ini halaman Student</h1>

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
      <td>{{$student["kelas"]}}</td>
      <td>{{$student["tanggal_lahir"]}}</td>
      <td>
        <div>
          <a type="button" class="btn btn-primary" href="/student/detail/{{$student -> id}}">Detail</a>
          <a type="button" class="btn btn-warning">Edit</a>
          <a type="button" class="btn btn-danger">Delete</a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection