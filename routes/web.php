<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/mahasiswa');
});

Route::prefix('mahasiswa')->group(function (){
    Route::get('/', [MahasiswaController::class,'index']);
    Route::get('/create', [MahasiswaController::class,'create']);
    Route::post('/', [MahasiswaController::class,'store']);
    Route::get('/{id}', [MahasiswaController::class,'show']);
    Route::get('/{id}/edit', [MahasiswaController::class,'edit']);
    Route::put('/{id}', [MahasiswaController::class,'update']);
    Route::delete('/{id}', [MahasiswaController::class,'destroy']);
});

Route::prefix('prodi')->group(function(){
    Route::get('/',[ProdiController::class,'index']);
    Route::get('/create',[ProdiController::class,'create']);
    Route::post('/',[ProdiController::class,'store']);
    Route::get('/{id',[ProdiController::class,'show']);
    Route::get('/{id}/edit',[ProdiController::class,'edit']);
    Route::put('/{id}',[ProdiController::class,'update']);
    Route::delete('/{id}',[ProdiController::class,'destroy']);
});


