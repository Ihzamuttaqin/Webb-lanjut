<?php

use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\soalcontroller;
use App\Http\Controllers\Utscontroller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

php artisan make:migration nama tabel /buat migrasi tabel ke coding folder
php artisan migrate /untuk migrate tabel ke database
php artisan make:seeder nama sedeer untuk membuat sedeer
php artisan migrate --seed supaya biar tabelnya keisi
php artisan make:model nama model /untuk buat model
php artisan make:controller nama controller -r /untuk buat coentroller
|
*/

Route::get('/', function () {
    return view('welcome');
});

//php artisan make:controller namacontroller (-r) opsional

Route::get('/mahasiswa/{id}/edit', [mahasiswacontroller::class])->name('mahasiswa.edit');
Route::delete('/mahasiswa/{id}', [mahasiswacontroller::class,'destroy'])->name('mahasiswa.delete');

Route::get('/kelas', [App\Http\Controllers\kelascontroller::class, 'index']);
Route::get('/kelas/{id}/edit', [mahasiswacontroller::class])->name('kelas.edit');
Route::delete('/kelas/{id}', [mahasiswacontroller::class,'destroy'])->name('kelas.delete');

Route::get('/soal', [App\Http\Controllers\soalcontroller::class, 'index'])->name('soal');
Route::get('/soal/{id}/edit', [soalcontroller::class])->name('soal.edit');
Route::delete('/soal/{id}', [soalcontroller::class,'destroy'])->name('soal.delete');
//Route::get('/tambahsoal', [soalcontroller::class, 'tambahsoal'])->name('tambahsoal');
Route::post('/insertdata', [soalcontroller::class, 'insertdata'])->name('insertdata');

Route::get('/mid/tampil', [App\Http\Controllers\Utscontroller::class, 'index'])->name('mid');

Route::get('/mid/tampildata/{id}', [Utscontroller::class, 'tampildata'])->name('tampildata');
Route::post('/mid/updatedata/{id}', [Utscontroller::class, 'updatedata'])->name('updatedata');

Route::get('/mid/delete/{id}', [Utscontroller::class,'delete'])->name('delete');

Route::get('/mid/form-tambah', [Utscontroller::class, 'tambah'])->name('tambah');
Route::post('/mid/insertdata', [Utscontroller::class, 'insertdata'])->name('insertdata');



//route about (hyperlink), [(controller yang dituju),(function yang dituju)]
Route::get('/about', [App\Http\Controllers\aboutcontroller::class, 'index'])->name('about');

Route::get('/mahasiswa', [App\Http\Controllers\mahasiswacontroller::class, 'index']);
