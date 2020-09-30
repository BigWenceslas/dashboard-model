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
//Etudiant
Route::post('/creer-un-compte/etudiant/post', 'RegisterController@createStudent')->name('createStudent');
Route::post('/creer-un-compte/freelance/post', 'RegisterController@createFreelance')->name('createFreelance');
Route::post('/creer-un-compte/startup/post', 'RegisterController@createStartup')->name('createStartup');
Route::post('/creer-un-compte/entreprise/post', 'RegisterController@createEntreprise')->name('createEntreprise');
//Fin creation de compte

//Connexion
Route::get('/connexion', 'LoginController@index')->name('login_view');
Route::post('/connecter-utilisateur', 'LoginController@login')->name('loginFront');
Route::get('/logout', 'LoginController@logout')->name('logout');
//Fin login
Route::group(['middleware' => ['auth']], function() {
    //Profile 
    Route::get('/dashboard/entreprise', 'ProfileController@index')->name('profile_entreprise');
    Route::get('/dashboard/startup', 'ProfileController@startup')->name('profile_startup');
    Route::get('/dashboard/etudiant', 'ProfileController@etudiant')->name('profile_etudiant');
    Route::get('/dashboard/freelance', 'ProfileController@freelance')->name('profile_freelance');
});



