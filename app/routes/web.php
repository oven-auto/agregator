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

Route::get('/', 'MainController@index');
Route::get('/ajax/get/modal/{brand}', 'MainController@showmodal')->name('ajax.show.modal');
Route::post('/ajax/send/mail','MainController@sendmail')->name('ajax.send.mail');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


