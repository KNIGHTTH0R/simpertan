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
Route::get('/pengajuan_kegiatan', 'PoktanController@index')->name('pengajuan_kegiatan');
// end Route POKTAN


// start Route Admin
Route::group(['prefix' => 'admin'], function(){
  Route::resource('dashboard', 'Admin\DashboardController');
  Route::resource('pengajuan', 'Admin\PengajuanController');
  Route::resource('peminjaman', 'Admin\PeminjamanController');
  Route::resource('laporantanam', 'Admin\LaporantanamController');
  Route::resource('cetak', 'Admin\CetakController');
  Route::resource('user', 'Admin\UserController');

  //start setting menu
  Route::resource('kegiatan', 'Admin\KegiatanController');
  Route::resource('satuan', 'Admin\SatuanController');
  Route::resource('role', 'Admin\RoleController');
  Route::resource('barangpinjam', 'Admin\BarangpinjamController');
  //end setting menu
});
// end Route Admin
