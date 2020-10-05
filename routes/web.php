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
    //Entreprise
    Route::get('/dashboard/entreprise', 'ProfileController@index')->name('profile_entreprise');
    Route::post('/dashboard/entreprise/editer_description', 'ProfileController@entreprise_editer_description')->name('entreprise.description');
    Route::post('/dashboard/entreprise/editer_presentation', 'ProfileController@entreprise_editer_presentation')->name('entreprise.presentation');
    Route::post('/dashboard/entreprise/editer_informations', 'ProfileController@entreprise_editer_informations')->name('entreprise.informations');
    //Fin Entreprise
    //Startup
    Route::get('/dashboard/startup', 'ProfileController@startup')->name('profile_startup');
    Route::post('/dashboard/startup/editer_description', 'ProfileController@startup_editer_description')->name('startup.description');
    Route::post('/dashboard/startup/editer_presentation', 'ProfileController@startup_editer_presentation')->name('startup.presentation');
    Route::post('/dashboard/startup/editer_informations', 'ProfileController@startup_editer_informations')->name('startup.informations');
    //Fin startup
    //etudiant
    Route::get('/dashboard/etudiant', 'ProfileController@etudiant')->name('profile_etudiant');
    Route::post('/dashboard/etudiant/editer_description', 'ProfileController@etudiant_editer_description')->name('etudiant.description');
    Route::post('/dashboard/etudiant/editer_presentation', 'ProfileController@etudiant_editer_presentation')->name('etudiant.presentation');
    Route::post('/dashboard/etudiant/editer_informations', 'ProfileController@etudiant_editer_informations')->name('etudiant.informations');
    Route::post('/dashboard/etudiant/competence/creer', 'ProfileController@etudiant_competences_create')->name('etudiant.competences.create');
    Route::post('/dashboard/etudiant/competence/modifier', 'ProfileController@etudiant_competences_update')->name('etudiant.competences.update');
    Route::delete('/dashboard/etudiant/competence/effacer/{id}', 'ProfileController@etudiant_competences_delete')->name('etudiant.competences.delete');
    //Fin Etudiant
    //Freelance
    Route::get('/dashboard/freelance', 'ProfileController@freelance')->name('profile_freelance');
    Route::post('/dashboard/freelance/editer_description', 'ProfileController@freelance_editer_description')->name('freelance.description');
    Route::post('/dashboard/freelance/editer_presentation', 'ProfileController@freelance_editer_presentation')->name('freelance.presentation');
    Route::post('/dashboard/freelance/editer_informations', 'ProfileController@freelance_editer_informations')->name('freelance.informations');
    //Fin freelance
});



