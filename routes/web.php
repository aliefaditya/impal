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
    return view('beranda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/jadwalpoli','JadwalController@index');

Route::post('/admin/tambahpoli','AdminController@tambahpoli')->middleware('admin');
Route::post('/admin/updatepoli','AdminController@updatepoli')->middleware('admin');
Route::get('/admin/hapuspoli/{id}','AdminController@hapuspoli')->middleware('admin');

Route::post('/admin/tambahjadwal','AdminController@tambahjadwal')->middleware('admin');
Route::post('/admin/updatejadwal','AdminController@updatejadwal')->middleware('admin');
Route::get('/admin/hapusjadwal/{id}','AdminController@hapusjadwal')->middleware('admin');

Route::post('/admin/tambahdokter','AdminController@tambahdokter')->middleware('admin');
Route::post('/admin/updatedokter','AdminController@updatedokter')->middleware('admin');
Route::get('/admin/hapusdokter/{id}','AdminController@hapusdokter')->middleware('admin');

Route::post('/admin/tambahjadwalpoli','AdminController@tambahjadwalpoli')->middleware('admin');
Route::post('/admin/updatejadwalpoli','AdminController@updatejadwali')->middleware('admin');
Route::get('/admin/hapusjadwalpoli/{id}','AdminController@hapusjadwalpoli')->middleware('admin');

Route::post('/admin/tambahantrian','AdminController@tambahantrian')->middleware('admin');
Route::post('/admin/updateantrian','AdminController@updateantrian')->middleware('admin');
Route::get('/admin/hapusantrian/{id}','AdminController@hapus')->middleware('admin');

Route::post('adminantrian','AdminController@tampilantrian')->middleware('admin');

Route::post('/admin/update','AdminController@update');

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

Route::get('jadwal', 'JadwalController@index');
Route::post('jadwal/daftar', 'AntreanController@tambahantrian');

Route::get('beranda', function () {
	return view('beranda');
});


Route::get('kontak', function () {
	return view('kontak');
});
Route::get('pasien',function () {return view('pasien'); });
Route::post('pasien/update/', 'PasienController@updateDataDiri');
Route::post('pasien/ubahpassword/{id}', 'PasienController@ubahpassword')->name('change.password');

