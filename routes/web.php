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

Route::get('/', 'FrontController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('services', 'ServicesController');

Route::resource('formations', 'FormationsController');

Route::resource('apropos', 'AproposController');

Route::resource('contactus', 'ContactUsController');

//Creation de compte
Route::get('/creer-un-commpte', 'RegisterController@register_type')->name('register_type');
//Fin creation de compte



