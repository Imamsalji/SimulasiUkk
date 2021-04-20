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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::post('pendaftaran', 'RegisterController@store')->name('pendaftaran');
    Route::get('daftar', 'RegisterController@create')->name('daftar');
    Route::get('pendaftar', 'RegisterController@index')->name('pendaftar');
    Route::get('print/{id}', 'RegisterController@print')->name('print');
    Route::get('show/{id}', 'RegisterController@show')->name('show');
    Route::get('edit/{id}', 'RegisterController@edit')->name('edit');
    Route::post('update/{id}', 'RegisterController@update')->name('update');
    Route::get('delete/{id}', 'RegisterController@destroy')->name('delete');


});
