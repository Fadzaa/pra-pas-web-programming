@extends('layouts.main')

@section('container')
    <h1>Ini halaman Pekerja RUS</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Pekerja</th>
      <th scope="col">Name</th>
      <th scope="col">Jenis Pekerjaan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($workers as $worker)
    <tr>
      <td>{{$worker["worker_id"]}}</td>
      <td>{{$worker["nama"]}}</td>
      <td>{{$worker["jenis_pekerjaan"]}}</td>
      <td>
        <div>
          <a type="button" class="btn btn-primary" href="/worker/detail/{{$worker -> id}}">Detail</a>
          <a type="button" class="btn btn-warning">Edit</a>
          <a type="button" class="btn btn-danger">Delete</a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection