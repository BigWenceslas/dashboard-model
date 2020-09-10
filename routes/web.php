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
Route::get('/creer-un-compte', 'RegisterController@register_type')->name('register_type');
Route::get('/creer-un-compte/etudiant', 'RegisterController@register_student')->name('register_student');
Route::get('/creer-un-compte/start-up', 'RegisterController@register_startup')->name('register_startup');
Route::get('/creer-un-compte/entreprise', 'RegisterController@register_entreprise')->name('register_entreprise');
Route::get('/creer-un-compte/freelance', 'RegisterController@register_freelance')->name('register_freelance');
//Fin creation de compte

//Connexion
Route::get('/connexion', 'LoginController@index')->name('login_view');
//Fin login



