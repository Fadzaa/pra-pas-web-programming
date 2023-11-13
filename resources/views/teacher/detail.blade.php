@extends('layouts.main')

@section('container')
    {{$teacher -> teacher_id}} <br>
    {{$teacher -> nama}} <br>
    {{$teacher -> tanggal_lahir}} <br>
    {{$teacher -> mapel_pengajar}} <br>
    {{$teacher -> alamat}} <br>

    <a href="/teacher/all">Back</a>
@endsection