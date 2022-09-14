@extends('layouts.app')

@section('content')
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h4>Tambah Mahasiswa</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="/mahasiswa">
                    @csrf
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Nama Lengkap</label>
                      <input type="nim" class="form-control" id="nama" name="nama" aria-describedby="namaHelp" value={{ old('nama') }}>
                      <div id="namHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="Nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control" id="Nim" name="nim" aria-describedby="nimHelp" value="{{ old('nim') }}">
                        <div id="nimlHelp" class="form-text"></div>
                    </div>
                    <select class="form-select mb-3" aria-label="Default select example" name="id_prodi">
                        <option selected>Pilih Program Studi</option>
                        @foreach ($prodi as $prd)
                        @if ($prd->id == old('id_prodi'))
                            <option  selected value="{{ $prd->id }}">{{ $prd->prodi }}</option>    
                        @else
                            <option value="{{ $prd->id }}">{{ $prd->prodi }}</option>
                        @endif
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
            </div>
        </div>
    </div>

@endsection