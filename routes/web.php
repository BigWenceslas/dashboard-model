<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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
Route::get('/', function(){
    if (!empty(Session::get('locale'))) {
        $langue = Session::get('locale');
    } else {
        app()->setLocale('fr');
        $langue = 'fr';
    }
    return redirect()->route('home',['locale'=>$langue]);
});
//Connexion
Route::get('/connexion', 'LoginController@index')->name('login_view');
Route::post('/connecter-utilisateur', 'LoginController@login')->name('loginFront');
Route::get('/logout', 'LoginController@logout')->name('logout');
//Fin login

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => ['auth']], function() {
    //Evaluation
    Route::get('/evaluation/{name}', 'ServicesController@service_login')->name('service_login');
    Route::post('/evaluation/evaluationStoreData', 'ServicesController@storeEvaluation')->name('storeEvaluation');
    //Fin Evaluation
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
    Route::post('/dashboard/etudiant/reference/creer', 'ProfileController@etudiant_reference_create')->name('etudiant.reference.create');
    Route::post('/dashboard/etudiant/reference/modifier', 'ProfileController@etudiant_reference_update')->name('etudiant.reference.update');
    Route::delete('/dashboard/etudiant/reference/effacer/{id}', 'ProfileController@etudiant_reference_delete')->name('etudiant.reference.delete');
    Route::post('/dashboard/etudiant/cursus_academique/creer', 'ProfileController@etudiant_cursus_academique_create')->name('etudiant.cursus_academique.create');
    Route::post('/dashboard/etudiant/cursus_academique/modifier', 'ProfileController@etudiant_cursus_academique_update')->name('etudiant.cursus_academique.update');
    Route::delete('/dashboard/etudiant/cursus_academique/effacer/{id}', 'ProfileController@etudiant_cursus_academique_delete')->name('etudiant.cursus_academique.delete');
    Route::post('/dashboard/etudiant/experience_professionnelle/creer', 'ProfileController@etudiant_experience_professionnelle_create')->name('etudiant.experience_professionnelle.create');
    Route::post('/dashboard/etudiant/experience_professionnelle/modifier', 'ProfileController@etudiant_experience_professionnelle_update')->name('etudiant.experience_professionnelle.update');
    Route::delete('/dashboard/etudiant/experience_professionnelle/effacer/{id}', 'ProfileController@etudiant_experience_professionnelle_delete')->name('etudiant.experience_professionnelle.delete');
    //Fin Etudiant
    //Freelance
    Route::get('/dashboard/freelance', 'ProfileController@freelance')->name('profile_freelance');
    Route::post('/dashboard/freelance/editer_description', 'ProfileController@freelance_editer_description')->name('freelance.description');
    Route::post('/dashboard/freelance/editer_presentation', 'ProfileController@freelance_editer_presentation')->name('freelance.presentation');
    Route::post('/dashboard/freelance/editer_informations', 'ProfileController@freelance_editer_informations')->name('freelance.informations');
    Route::post('/dashboard/freelance/competence/creer', 'ProfileController@freelance_competences_create')->name('freelance.competences.create');
    Route::post('/dashboard/freelance/competence/modifier', 'ProfileController@freelance_competences_update')->name('freelance.competences.update');
    Route::delete('/dashboard/freelance/competence/effacer/{id}', 'ProfileController@freelance_competences_delete')->name('freelance.competences.delete');
    Route::post('/dashboard/freelance/reference/creer', 'ProfileController@freelance_reference_create')->name('freelance.reference.create');
    Route::post('/dashboard/freelance/reference/modifier', 'ProfileController@freelance_reference_update')->name('freelance.reference.update');
    Route::delete('/dashboard/freelance/reference/effacer/{id}', 'ProfileController@freelance_reference_delete')->name('freelance.reference.delete');
    Route::post('/dashboard/freelance/cursus_academique/creer', 'ProfileController@freelance_cursus_academique_create')->name('freelance.cursus_academique.create');
    Route::post('/dashboard/freelance/cursus_academique/modifier', 'ProfileController@freelance_cursus_academique_update')->name('freelance.cursus_academique.update');
    Route::delete('/dashboard/freelance/cursus_academique/effacer/{id}', 'ProfileController@freelance_cursus_academique_delete')->name('freelance.cursus_academique.delete');
    Route::post('/dashboard/freelance/experience_professionnelle/creer', 'ProfileController@freelance_experience_professionnelle_create')->name('freelance.experience_professionnelle.create');
    Route::post('/dashboard/freelance/experience_professionnelle/modifier', 'ProfileController@freelance_experience_professionnelle_update')->name('freelance.experience_professionnelle.update');
    Route::delete('/dashboard/freelance/experience_professionnelle/effacer/{id}', 'ProfileController@freelance_experience_professionnelle_delete')->name('freelance.experience_professionnelle.delete');
    //Fin freelance
    });

Route::group(['prefix' => '{locale}', 'middleware' => 'localization'], function () {
Route::get('/vitrine-multilangue', 'FrontController@vitrine')->name('vitrine_multilangue');
Route::get('/locale', 'FrontController@language')->name('langue');
Route::get('/', 'FrontController@index')->name('home');

Route::resource('services', 'ServicesController');

Route::resource('formations', 'FormationsController');

Route::resource('apropos', 'AproposController');
Route::get('/a-propos/entreprises', 'AproposController@a_propos')->name('a_propos.liste');
Route::get('/a-propos/liste-entreprises/{categorie?}/{ville?}', 'AproposController@a_propos_all')->name('apropos.liste.all');
Route::post('/a-propos/liste-entreprises/resultat-recherche', 'AproposController@search_enterprise')->name('apropos.search_enterprise');

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

//fond d'investissement
Route::get('/fond-investissement', 'FondInvestissementController@index')->name('fond_investissement');
Route::get('/fond-investissement/{slug}', 'FondInvestissementController@details')->name('fond_investissement_details');
// Fin fond d'investissement

//Avis site
Route::post('/avis-site/post', 'AproposController@createAvis')->name('createAvis');
//Fin Avis site

//Dejeuners d'affaires
Route::get('/services/evenements/{slug}', 'ServicesController@evenement')->name('services.evenement');
Route::post('/evenement/requete-dejeuner', 'ServicesController@event_request')->name('event_request');
Route::post('/evenement/requete-intermediation', 'ServicesController@event_intermediation_request')->name('event_intermediation_request');
//

//Reset password
Route::get('compte/reinitialiser_mot_de_passe', 'AccountsController@reinitialiser_mot_de_passe')->name('reinitialiser_mot_de_passe');
Route::post('compte/reset_password_request', 'AccountsController@reset_password_request')->name('reset_password_request');
Route::post('compte/reset_password_form', 'AccountsController@reset_password_form')->name('reset_password_form');
Route::post('compte/password_reset', 'AccountsController@password_reset')->name('password_reset');
//End reset password

});

