@extends('layouts.main')

@section('container')

<h1>Tambah Data Students</h1>
<form method="POST" action="/student/add">
    @csrf
  <div class="mb-3">
    <label for="exampleInputNis" class="form-label">NIS</label>
    <input name="nis" value="{{old('nis')}}" type="text" inputmode="numeric" pattern="[0-9]+" maxlength="5" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIS"  oninput="this.value = this.value.replace(/[^0-9]/g, '');">
  </div>

  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input name="nama" value="{{old('nama')}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>

  <div class="mb-3">
    <label for="kelas" class="form-label">Class</label>
    <select class="form-select" name="kelas_id" id="">
                @foreach ($kelas as $Kelas)
                    <option value="{{ $Kelas->id }}">{{ $Kelas->nama }}</option>
                @endforeach 
            </select>
    {{-- <input name="kelas" value="{{old('kelas')}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Class"> --}}
  </div>

  <div class="mb-3">
    <label for="exampleInputBirthDate" class="form-label">Birth Date</label>
    <input name="tanggal_lahir" value="{{old('tanggal_lahir')}}" type="date" class="form-control" id="exampleInputPassword1" placeholder="Birth Date">
  </div>

  <div class="mb-3">
    <label for="exampleInputBirthDate" class="form-label">Address</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection