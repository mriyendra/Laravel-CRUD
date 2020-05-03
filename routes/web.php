<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mahasiswa','MahasiswaController@index');
Route::post('/mahasiswa/create','MahasiswaController@create');
Route::get('/mahasiswa/{id}/edit','MahasiswaController@edit');
Route::post('/mahasiswa/{id}/update','MahasiswaController@update');
Route::get('/mahasiswa/{id}/delete','MahasiswaController@delete');
