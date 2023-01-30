<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/datasiswa', 'App\Http\Controllers\SiswaController@datasiswa');
Route::get('/dataguru', 'App\Http\Controllers\GuruController@dataguru');
Route::get('datasiswa/tambahsiswa', 'App\Http\Controllers\SiswaController@tambahsiswa');
Route::post('datasiswa/proses_siswa', 'App\Http\Controllers\SiswaController@proses_siswa');
Route::get('dataguru/tambahguru', 'App\Http\Controllers\GuruController@tambahguru'); 
Route::post('dataguru/proses_guru', 'App\Http\Controllers\GuruController@proses_guru');

Route::get('datasiswa/editsiswa/{id}', 'App\Http\Controllers\SiswaController@editsiswa');
Route::post('datasiswa/updatesiswa', 'App\Http\Controllers\SiswaController@updatesiswa');
Route::get('datasiswa/hapus_siswa/{id}', 'App\Http\Controllers\SiswaController@hapus_siswa');


Route::get('dataguru/editguru/{id}', 'App\Http\Controllers\GuruController@edit_guru');
Route::post('dataguru/updateguru', 'App\Http\Controllers\GuruController@updateguru');
Route::get('dataguru/hapus_guru/{id}', 'App\Http\Controllers\GuruController@hapus_guru');



//Berita
Route::get('/berita', 'App\Http\Controllers\BeritaController@berita');
Route::get('berita/tambahberita', 'App\Http\Controllers\BeritaController@tambahberita'); 
Route::post('/berita/proses', 'App\Http\Controllers\BeritaController@proses_berita');
Route::post('databerita/proses_berita', 'App\Http\Controllers\BeritaController@proses_berita');
Route::get('berita/hapus/{id}', 'App\Http\Controllers\BeritaController@hapus_berita');
Route::get('berita/editberita/{id}', 'App\Http\Controllers\BeritaController@editberita');
Route::post('berita/updateberita', 'App\Http\Controllers\BeritaController@updateberita');