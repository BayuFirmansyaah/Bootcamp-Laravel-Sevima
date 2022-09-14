<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class MahasiswaController extends Controller
{

    protected $mahasiswa;

    public function __construct(
        Mahasiswa $mahasiswa
    ){
        $this->mahasiswa = $mahasiswa;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa/index',[
            'title' => 'Home Mahasiswa',
            'mahasiswa' => $this->mahasiswa->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nama = $request->old('nama');
        $nim = $request->old('nim');
        $id_prodi = $request->old('id_prodi');

        return view('mahasiswa/create',[
            'title' => 'Create Mahasiswa',
            'prodi' => Prodi::all(),
            'nama' => $nama,
            'nim' => $nim,
            'id_prodi' => $id_prodi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'nama' => ['required'],
            'nim' => ['required',  'max:11', 'unique:mahasiswas' ],
            'id_prodi' => ['required']
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->id_prodi = $request->id_prodi;
        $mahasiswa->save(); 
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show($id)
    {
        $mhs = $this->mahasiswa->getMahasiswa($id);
        return view('mahasiswa/show',[
            'title' => $mhs['nama'],
            'mahasiswa' => $mhs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $mahasiswa = $this->mahasiswa->getMahasiswa($id);
        $prodi = Prodi::all();

        return view('mahasiswa/update',[
            'title' => 'Update Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Mahasiswa $mahasiswa)
    {
        $validation = $request->validate([
            'nama' => ['required'],
            'nim' => ['required',  'max:11', 'unique:mahasiswas' ],
            'id_prodi' => ['required']
        ]);

        $mahasiswa = $this->mahasiswa->find($id);
        $mahasiswa->update($request->except(['token','submit']));
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $mahasiswa = $this->mahasiswa->find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
