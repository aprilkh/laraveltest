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

/*Route::get('/home', function () {
    return 'Selamat datang di home';
});*/

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/home', 'HomeController@index');

Route::get('/home/tambah', 'HomeController@tambahData');
	
Route::post('/home/simpan', 'HomeController@simpan');

Route::get('/home/edit/{id}', 'HomeController@edit');

Route::post('/home/update', 'HomeController@update');

Route::delete('/home/delete/{id}', 'HomeController@delete');

Route::get('/home/detail/{id}', 'HomeController@detail');
