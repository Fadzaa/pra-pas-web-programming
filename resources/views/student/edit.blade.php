@extends('layouts.main')

@section('container')

<h1>Edit Data Students</h1>

<form action="/student/update/{{ $student -> id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputNis" class="form-label">NIS</label>
        <input name="nis" readonly value="{{ $student->nis }}" type="text" inputmode="numeric" pattern="[0-9]+" maxlength="5" class="form-control" id="exampleInputNis" aria-describedby="emailHelp" placeholder="NIS" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
    </div>

    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input name="nama" value="{{ $student->nama }}" type="text" class="form-control" id="exampleInputName" placeholder="Name">
    </div>

    <div class="mb-3">
        <label for="exampleInputClass" class="form-label">Class</label>
        <input name="kelas" value="{{ $student->kelas }}" type="text" class="form-control" id="exampleInputClass" placeholder="Class">
    </div>

    <div class="mb-3">
        <label for="exampleInputBirthDate" class="form-label">Birth Date</label>
        <input name="tanggal_lahir" value="{{ $student->tanggal_lahir }}" type="date" class="form-control" id="exampleInputBirthDate" placeholder="Birth Date">
    </div>

    <div class="mb-3">
        <label for="exampleInputBirthDate" class="form-label">Address</label>
        <input name="alamat" value="{{ $student->alamat }}" type="text" class="form-control" id="exampleInputAddress" placeholder="Address">
    </div>

    <input type="hidden" name="id" value="{{ $student->id }}">

    <button type="submit" class="btn btn-primary">Update</button>
</form>




@endsection