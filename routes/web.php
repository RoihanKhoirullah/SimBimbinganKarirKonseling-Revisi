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

// WELCOME
Route::get('/', function () {
    return view('welcome');
});

//HOME
Route::get('/index','user\HomeController@index');

Route::get('/profile','user\ProfileController@index');

// LOGIN
Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

// REGISTRASI
// Route::get('/registrasi' , 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi' , 'LoginController@simpanregistrasi')->name('simpanregistrasi');

// DATA PENGGUNA
Route::get('/admin/datapengguna-create' , 'DatapenggunaController@create')->name('Datapengguna.create');
Route::post('/admin/datapengguna-store' , 'DatapenggunaController@store')->name('Datapengguna.store');
Route::get('/datapengguna-edit/{id}' , 'DatapenggunaController@edit')->name('Datapengguna.edit');
Route::put('/datapengguna-update/{id}' , 'DatapenggunaController@update')->name('Datapengguna.update');
Route::get('/delete/{id}' , 'DatapenggunaController@destroy')->name('delete');

// MULTI LOGIN
Route::group(['middleware' => ['auth','ceklevel:admin,guru,pembimbing-siswa']], function() {

    Route::get('/admin' , 'BerandaController@index');

});
Route::group(['middleware' => ['auth','ceklevel:admin']], function() {

    Route::get('/admin/data-akun' , 'DatapenggunaController@index')->name('Datapengguna.index');

});
Route::group(['middleware' => ['auth','ceklevel:admin,guru']], function() {

    Route::get('/admin/data-siswa' , 'DatasiswaController@index')->name('data-siswa.index');

});
Route::group(['middleware' => ['auth','ceklevel:admin,guru']], function() {

    Route::get('/admin/input-siswa' , 'InputsiswaController@index')->name('input-siswa.index');

});
Route::group(['middleware' => ['auth','ceklevel:admin,pembimbing-siswa']], function() {

    Route::get('/admin/data-siswa' , 'DatasiswaController@index')->name('input-siswa.index');

});
// END MULTI LOGIN

// Input Siswa
Route::post('/admin/input-siswa-store' , 'InputsiswaController@store')->name('input-siswa.store');
