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

//query builder
// Route::get('/insert', 'mahasiswa@insert');
// Route::get('/view', 'mahasiswa@read');
// Route::get('/edit', 'mahasiswa@update');
// Route::get('/apus', 'mahasiswa@delete');

//eloqouent
Route::get('/create', 'dosenController@create');
Route::get('/lihat/{slug}', 'dosenController@show');