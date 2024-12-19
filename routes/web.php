<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\siswacontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/beranda', [homecontroller::class, 'index']);
Route::get('/tentang', [homecontroller::class, 'tentang']);
Route::get('/kontak', [homecontroller::class, 'kontak']);
Route::get('/siswa', [siswacontroller::class, 'index']);
Route::match(['get','post'],'/siswa/insert', [siswacontroller::class, 'insert']);
Route::match(['get','post'],'/siswa/ubah/{id}', [siswacontroller::class, 'ubah']);
Route::match(['get','post'],'/siswa/hapus/{id}', [siswacontroller::class, 'hapus']);
Route::get('admin', function(){
    return view ('tema');
});
Route::get('/', [sessioncontroller::class, 'index']);
Route::post('/sesi/login', [sessioncontroller::class, 'login']);
Route::get('/sesi/logout', [sessioncontroller::class, 'logout']);