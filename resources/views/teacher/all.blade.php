@extends('layouts.main')

@section('container')
    <h1>Ini halaman Teacher</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Guru</th>
      <th scope="col">Name</th>
      <th scope="col">Mapel Pengajar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($teachers as $teacher)
    <tr>
      <td>{{$teacher["teacher_id"]}}</td>
      <td>{{$teacher["nama"]}}</td>
      <td>{{$teacher["mapel_pengajar"]}}</td>
      <td>
        <div>
          <a type="button" class="btn btn-primary" href="/teacher/detail/{{$teacher -> id}}">Detail</a>
          <a type="button" class="btn btn-warning">Edit</a>
          <a type="button" class="btn btn-danger">Delete</a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection