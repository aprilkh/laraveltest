<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', 'MovieController@index');

Route::get('/home/tambah', 'MovieController@tambahData');
	
Route::post('/home/simpan', 'MovieController@simpan');

Route::get('/home/edit/{id}', 'MovieController@edit');

Route::post('/home/update', 'MovieController@update');

Route::delete('/home/delete/{id}', 'MovieController@delete');

Route::get('/home/detail/{id}', 'MovieController@detail');

