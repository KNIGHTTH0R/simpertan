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
  // return view('pdf.pengajuan');
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// start Route POKTAN
Route::group(['prefix' => 'poktan'], function() {
  Route::resource('poktan_dashboard', 'Poktan\DashboardController');
  Route::resource('poktan_pengajuan', 'Poktan\PengajuanController');
  Route::resource('poktan_peminjaman', 'Poktan\PeminjamanController');
	Route::get('/poktan_cetak_pengajuan', 'Poktan\PengajuanController@cetakPengajuan')->name('poktan_cetak_pengajuan');
	Route::get('/poktan_cetak_peminjaman', 'Poktan\PeminjamanController@cetakPeminjaman')->name('poktan_cetak_peminjaman');
});
// end Route POKTAN

// start Route Admin
Route::group(['prefix' => 'admin'], function(){
  Route::resource('admin_dashboard', 'Admin\DashboardController');
  Route::resource('admin_pengajuan', 'Admin\PengajuanController');
  Route::resource('admin_peminjaman', 'Admin\PeminjamanController');
  Route::resource('admin_laporantanam', 'Admin\LaporantanamController');

  Route::resource('admin_cetak', 'Admin\CetakController');
  Route::resource('admin_user', 'Admin\UserController');

  //start setting menu
  Route::resource('admin_alsintanusulan', 'Admin\AlsintanUsulanController');
  Route::resource('admin_satuan', 'Admin\SatuanController');
  Route::resource('admin_role', 'Admin\RoleController');
  Route::resource('admin_alsintanpinjam', 'Admin\AlsintanPinjamController');
  //end setting menu
});
// end Route Admin

// start Route Bidang
Route::group(['prefix' => 'bidang'], function() {
	Route::resource('bidang_pengajuan', 'Bidang\PengajuanController');
	Route::get('bidang_cetak', 'Bidang\PengajuanController@show')->name('cetak');

	Route::resource('bidang_peminjaman', 'Bidang\PeminjamanController');
});
// end Route Bidang

// start Route Kadis
Route::group(['prefix' => 'kadis'], function() {
  Route::resource('kadis_dashboard', 'Kadis\DashboardController');
});
// end Route Bidang

//start Route petugas
Route::group(['prefix' => 'petugas'], function(){
  Route::resource('petugas_dashboard', 'Petugas\DashboardController');
  Route::resource('petugas_cetak', 'Petugas\CetakController');
  Route::resource('petugas_tanam', 'Petugas\TanamController');
});
//end Route petugas
