<?php

namespace App\Models;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function getAll(){
        return Mahasiswa::get()->map(function($mhs) {
            return[
                'id' => $mhs->id,
                'nama' => $mhs->nama,
                'nim' => $mhs->nim,
                'prodi' => Prodi::find($mhs->id_prodi)
            ];
        });
    }

    static function getMahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        return [
            'id' => $mahasiswa->id,
            'nama' => $mahasiswa->nama,
            'nim' => $mahasiswa->nim,
            'id_prodi' => Prodi::find($mahasiswa->id_prodi)
        ];
    }
}
