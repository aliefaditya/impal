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

Route::get('/admin/tambahpoli','AdminController@tambahpoli');
Route::post('/admin/poli/simpan','AdminController@simpan');
Route::get('/admin/poli/edit/{id}','AdminController@edit');
Route::post('/admin/updatepoli','AdminController@updatepoli');
Route::get('/admin/poli/hapus/{id}','AdminController@hapus');

Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/simpan','AdminController@simpan');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/simpan','AdminController@simpan');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/simpan','AdminController@simpan');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/simpan','AdminController@simpan');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('/admin/tambah','AdminController@tambah');
Route::post('/admin/simpan','AdminController@simpan');
Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('admin/', 'AdminController@admin')->middleware('admin');



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
