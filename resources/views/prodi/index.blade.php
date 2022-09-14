@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Prodi</th>
                    <th colspan="2" scope="col" style="text-align:left">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $number = 1;
                    @endphp
                    @foreach ($prodi as $prd)
                    <tr>
                        <th scope="row">{{ $number++ }}</th>
                        <td>{{ $prd->prodi }}</td>
                        <td>
                            <a href="">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="/prodi/{{ $prd->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection