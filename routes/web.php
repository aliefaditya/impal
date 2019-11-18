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


Route::get('/jadwalpoli','JadwalController@index');
Route::get('/jadwalpoli/tambah','JadwalController@tambah');
Route::post('/jadwalpoli/simpan','JadwalController@simpan');
Route::get('/jadwalpoli/edit/{id}','JadwalController@edit');
Route::post('/jadwalpoli/update','JadwalController@update');
Route::get('/jadwalpoli/hapus/{id}','JadwalController@hapus');

Route::get('admin/routes', 'AdminController@admin')->middleware('admin');



Route::get('daftarantrean', function () {
	return view('daftarantrean');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profil', function () {
	return view('profil');
});

Route::get('jadwal', function () {
	return view('jadwal');
});


Route::get('beranda', function () {
	return view('beranda');
});
Route::get('/pasien',function () {
	return view('pasien');
});
Route::get('/pasien/edit/{id}', 'PasienController@edit');
Route::put('/pasien/update/{id}', 'PasienController@update');