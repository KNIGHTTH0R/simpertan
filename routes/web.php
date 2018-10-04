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

// Route::get('/', function () {
//   // return view('pdf.pengajuan');
//   return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
  Route::get('/', 'HomeController@index')->name('home');
});
// start Route POKTAN
Route::group(['prefix' => 'poktan', 'middleware' => 'auth'], function() {
  Route::resource('poktan_dashboard', 'Poktan\DashboardController');
  Route::resource('poktan_pengajuan', 'Poktan\PengajuanController');
  Route::resource('poktan_pengajuan/id/edit', 'Poktan\PengajuanController');
  Route::resource('poktan_peminjaman', 'Poktan\PeminjamanController');
  Route::resource('poktan_peminjaman/id/edit', 'Poktan\PeminjamanController');
	Route::get('/poktan_cetak_pengajuan', 'Poktan\PengajuanController@print')->name('poktan_cetak_pengajuan');
	Route::get('/poktan_cetak_peminjaman', 'Poktan\PeminjamanController@print')->name('poktan_cetak_peminjaman');
});
// end Route POKTAN

// start Route Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
  Route::resource('admin_dashboard', 'Admin\DashboardController');
  Route::resource('admin_pengajuan', 'Admin\PengajuanController');
  Route::resource('admin_peminjaman', 'Admin\PeminjamanController');
  Route::resource('admin_laporantanam', 'Admin\LaporantanamController');

  Route::resource('admin_cetak', 'Admin\CetakController');

  Route::resource('admin_staffuser', 'Admin\StaffUserController');
<<<<<<< HEAD

=======
 
>>>>>>> 9dc8d572bb58c064e07c0ff3c64c5f572e9595b5
  Route::resource('admin_poktanuser', 'Admin\PoktanUserController');


  //start setting menu
  Route::resource('admin_alsintanusulan', 'Admin\AlsintanUsulanController');
  Route::resource('admin_alsintanusulan/id/edit', 'Admin\AlsintanUsulanController');

  Route::resource('admin_alsintanpinjam', 'Admin\AlsintanPinjamController');
  Route::resource('admin_alsintanpinjam/id/edit', 'Admin\AlsintanUsulanController');

  Route::resource('admin_satuan', 'Admin\SatuanController');
  Route::resource('admin_satuan/id/edit', 'Admin\SatuanController');

  Route::resource('admin_role', 'Admin\RoleController');
  //end setting menu
});
// end Route Admin

// start Route Bidang
Route::group(['prefix' => 'bidang', 'middleware' => 'auth'], function() {
  Route::resource('bidang_dashboard', 'Bidang\DashboardController');

  Route::resource('bidang_pengajuan', 'Bidang\PengajuanController');
  Route::resource('bidang_pengajuan/id/edit', 'Bidang\PengajuanController');
	Route::get('bidang_cetak', 'Bidang\PengajuanController@show')->name('cetak');

	Route::resource('bidang_peminjaman', 'Bidang\PeminjamanController');
  Route::resource('bidang_peminjaman/id/edit', 'Bidang\PeminjamanController');
});
// end Route Bidang

// start Route Kadis
Route::group(['prefix' => 'kadis', 'middleware' => 'auth'], function() {
  Route::resource('kadis_dashboard', 'Kadis\DashboardController');
});
// end Route Bidang

//start Route petugas
Route::group(['prefix' => 'petugas', 'middleware' => 'auth'], function(){
  Route::resource('petugas_dashboard', 'Petugas\DashboardController');
  Route::resource('petugas_cetak', 'Petugas\CetakController');
  Route::resource('petugas_tanam', 'Petugas\TanamController');
});
//end Route petugas

//start Route petugas
Route::group(['prefix' => 'api', 'middleware' => 'auth'], function(){
  Route::post('merk', 'poktan\PengajuanController@getMerk')->name('lookup.merk.data');
});
//end Route petugas
