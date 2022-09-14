@extends('layouts.app')

@section('content')
    
   <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control outline-none" placeholder="Masukan Nama/Nim Mahasiswa" aria-label="Masukan Nama/Nim Mahasiswa" aria-describedby="button-addon2">
                        <button class="btn btn-danger" type="button" id="button-addon2">Button</button>
                    </div>
                </form>
            </div>
        </div>
   </div>

   <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Prodi</th>
                        <th colspan="3" scope="col" style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                      $number = 1;   
                    @endphp
                      @foreach ($mahasiswa as $mhs)
                        <tr>
                            <th scope="row">{{ $number }}</th>
                            <td>{{ $mhs['nim'] }}</td>
                            <td>{{ $mhs['nama'] }}</td>
                            <td>{{ $mhs['prodi']['prodi'] }}</td>
                            <td>
                                <a href="/mahasiswa/{{ $mhs['id'] }}">
                                    <button class="btn btn-success">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/mahasiswa/{{ $mhs['id'] }}/edit/">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-pencil"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="/mahasiswa/{{ $mhs['id'] }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $number++;
                        @endphp
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
   </div>

@endsection