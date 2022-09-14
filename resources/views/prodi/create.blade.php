@extends('layouts.app')

@section('content')
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h4>Tambah Prodi</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="/prodi">
                    @csrf
                    <div class="mb-3">
                      <label for="NamaProdi" class="form-label">Nama Prodi</label>
                      <input type="text" class="form-control" id="NamaProdi" name="prodi" aria-describedby="prodiHelp">
                      <div id="prodiHelp" class="form-text"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
            </div>
        </div>
    </div>

@endsection