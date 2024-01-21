@extends('layouts.main')

@section('container')
    {{$worker -> worker_id}} <br>
    {{$worker -> nama}} <br>
    {{$worker -> tanggal_lahir}} <br>
    {{$worker -> mapel_pengajar}} <br>
    {{$worker -> jenis_pekerjaan}} <br>
    {{$worker -> shift}} <br>

    <a href="/worker/all">Back</a>
@endsection