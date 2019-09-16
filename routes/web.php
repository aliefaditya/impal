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
    return view('homepage');
});

Route::get('tentang', function () {
	return view('tentang');
});

Route::get('login', function () {
	return "Halo, Selamat datang di halaman login ASSES";
});

Route::get('register', function () {
	return view('register');
});

Route::get('pasien', 'PasienController@index');