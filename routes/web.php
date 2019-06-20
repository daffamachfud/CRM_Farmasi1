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
//default route
Route::get('/', function () {
    return view('master');
});

//route saya
Route::get('/datadokter','DatadokterController@home');
Route::get('/datadokter/input','DatadokterController@input');
Route::post('/datadokter/store','DatadokterController@store');
Route::get('/datadokter/edit/{id}','DatadokterController@edit');
Route::post('/datadokter/update','DatadokterController@update');
Route::get('/datadokter/hapus/{id}','DatadokterController@hapus');
Route::get('/besarpotensi/home','BesarPotensiController@home');
Route::post('/besarpotensi/store','BesarPotensiController@store');
Route::get('/besarpotensi/input_potensi/{id}','BesarPotensiController@input_potensi');


