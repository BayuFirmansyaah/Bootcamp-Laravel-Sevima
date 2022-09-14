@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <h3>Nama : {{ $mahasiswa['nama'] }}</h3>
                <h3>Nim : {{ $mahasiswa['nim'] }}</h3>
                <h3>Prodi : {{ $mahasiswa['id_prodi']['prodi'] }}</h3>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-lg-11">
                <a href="/mahasiswa" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </div>
@endsection