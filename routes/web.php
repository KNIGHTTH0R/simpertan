<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// start Route POKTAN
Route::get('/pengajuan_kegiatan', 'PoktanController@pengajuan')->name('pengajuan_kegiatan');
Route::get('/pengajuan_peminjaman', 'PoktanController@peminjaman')->name('pengajuan_peminjaman');
Route::get('/cetak_pengajuan', 'PoktanController@cetakPengajuan')->name('cetak_pengajuan');
Route::get('/cetak_peminjaman', 'PoktanController@cetakPeminjaman')->name('cetak_peminjaman');
Route::get('/laporan', 'PoktanController@laporan')->name('laporan');
// end Route POKTAN
