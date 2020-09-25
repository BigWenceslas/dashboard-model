<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use App\BanniereAccueil;
use App\Temoignage;
use App\User;
use App\DonneesCompte;
use App\CursusAcademique;
use App\ExperiencesProfessionnelle;
use App\Reference;
use App\Comptence;

class RegisterController extends Controller
{
    public function register_type()
    {
        return view('register.register_type');
    }

    public function register_student()
    {
        return view('register.etudiant.register_student');
    }

    public function createStudent(Request $request)
    {
       $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'phoneNumber' => 'required',
        'email' => 'required',

        'diplome1' => 'required',
        'fichier_diplome1' => 'required',
        'annee_obtention1' => 'required',
    ]);

    $user = User::create([
        'name' => $request->lastname." ".$request->firstname,
        'email' => $request->email,
        'prenom' => $request->firstname,
        'nom' => $request->nom,
        'fonction' => $request->fonction,
        'password' => Hash::make($request->password),
    ]);
    //Donnees Supplementaires
    $photo = "";
    $cv = "";
    $folderName = "storage/etudiants/";
    
    $donnees_comptes = new DonneesCompte();
    if ($request->hasFile('cv')) {
        $unique_cv_name = md5($request->file('cv')->getFileName(). time()). "." . $request->file('cv')->getClientOriginalExtension();
        $donnees_comptes->cv = $unique_cv_name;
        $request->file('cv')->move($folderName,$unique_cv_name);


    }if ($request->hasFile('photo')) {
        $unique_photo_name = md5($request->file('photo')->getFileName(). time()).".".$request->file('photo')->getClientOriginalExtension();
        $donnees_comptes->photo = $unique_photo_name;
        $request->file('photo')->move($folderName,$unique_photo_name);
    }
    $donnees_comptes->telephone = $request->tel.$request->phoneNumber;
    $donnees_comptes->email = $request->email;
    $donnees_comptes->nom = $request->lastname;
    $donnees_comptes->prenom = $request->firstname;
    $donnees_comptes->dernier_diplome = $request->dernier_diplome;
    $donnees_comptes->type_stage_recherche = $request->type_stage_recherche;
    $donnees_comptes->duree_stage_souhaitee = $request->duree_stage_souhaitee;
    
    if ($request->newsletter_whatsapp == "on") {
       $donnees_comptes->newsletter_whatsapp = 1;
    }
    if ($request->abonne_newsletter == "on") {
       $donnees_comptes->abonne_newsletter = 1;
    }

    $donnees_comptes->type_compte = "Etudiant";
    $donnees_comptes->user = $user->id;

    $donnees_comptes->save();
    //Cursus Academique
    if ($request->diplome1 && $request->hasFile('fichier_diplome1') && $request->annee_obtention1) {
        $unique_document = md5($request->file('fichier_diplome1')->getFileName(). time()).".".$request->file('fichier_diplome1')->getClientOriginalExtension();
        $request->file('fichier_diplome1')->move($folderName,$unique_photo_name);

        $cursus_academique = CursusAcademique::create([
            'titre' => $request->diplome1,
            'annee' => $request->annee_obtention1,
            'document' => $unique_document,
            'user_data' => $donnees_comptes->id
        ]);
    }

    if ($request->diplome2 && $request->hasFile('fichier_diplome2') && $request->annee_obtention2) {
        $unique_document = md5($request->file('fichier_diplome2')->getFileName(). time()).".".$request->file('fichier_diplome2')->getClientOriginalExtension();
        $request->file('fichier_diplome2')->move($folderName,$unique_photo_name);

        $cursus_academique = CursusAcademique::create([
            'titre' => $request->diplome2,
            'annee' => $request->annee_obtention2,
            'document' => $unique_document,
            'user_data' => $donnees_comptes->id
        ]);
    }

    if ($request->diplome3 && $request->hasFile('fichier_diplome3') && $request->annee_obtention3) {
        $unique_document = md5($request->file('fichier_diplome3')->getFileName(). time()).".".$request->file('fichier_diplome3')->getClientOriginalExtension();
        $request->file('fichier_diplome3')->move($folderName,$unique_photo_name);

        $cursus_academique = CursusAcademique::create([
            'titre' => $request->titre_experience1,
            'annee' => $request->annee_obtention3,
            'document' => $unique_document,
            'user_data' => $donnees_comptes->id
        ]);
    }
    //Exp Pro
    if ($request->titre_experience2 && $request->entreprise_experience2 && 
    $request->date_debut_experience2 && $request->date_fin_experience1) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'titre' => $request->titre_experience1,
            'entreprise' => $request->entreprise_experience1,
            'date_debut' => $request->date_debut_experience1,
            'date_fin' => $request->date_fin_experience1,
            'user_data' => $donnees_comptes->id
    ]);
    }


    if ($request->titre_experience1 && $request->entreprise_experience1 && 
    $request->date_debut_experience1 && $request->date_fin_experience2) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'titre' => $request->titre_experience2,
            'entreprise' => $request->entreprise_experience2,
            'date_debut' => $request->date_debut_experience2,
            'date_fin' => $request->date_fin_experience2,
            'user_data' => $donnees_comptes->id
    ]);
    }


    if ($request->titre_experience3 && $request->entreprise_experience3 && 
    $request->date_debut_experience3 && $request->date_fin_experience3) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'titre' => $request->titre_experience3,
            'entreprise' => $request->entreprise_experience3,
            'date_debut' => $request->date_debut_experience3,
            'date_fin' => $request->date_fin_experience3,
            'user_data' => $donnees_comptes->id
    ]);
    }
    //Competences
    if ($request->competence1) {
        $comp = Competence::create([
            'titre' => $request->competence1,
            'user_data' => $donnees_comptes->id
        ]);
    }
    if ($request->competence2) {
        $comp = Competence::create([
            'titre' => $request->competence2,
            'user_data' => $donnees_comptes->id
        ]);
    }
    if ($request->competence3) {
        $comp = Competence::create([
            'titre' => $request->competence3,
            'user_data' => $donnees_comptes->id
        ]);
    }
    //References
    if ($request->reference1) {
        $ref = Reference::create([
            'titre' => $request->reference1,
            'user_data' => $donnees_comptes->id
        ]);
    }
    if ($request->reference2) {
        $ref = Reference::create([
            'titre' => $request->reference2,
            'user_data' => $donnees_comptes->id
        ]);
    }
    if ($request->reference3) {
        $ref = Reference::create([
            'titre' => $request->reference3,
            'user_data' => $donnees_comptes->id
        ]);
    }
    auth()->login($user);

    toastr()->success('Votre compte a ete cree avec succes!');
    return redirect('/');
    }

    public function register_startup()
    {
        return view('register.startup.register_startup');
    }

    public function register_entreprise()
    {
        return view('register.entreprise.register_entreprise');
    }

    public function register_freelance()
    {
        return view('register.freelance.register_freelance');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

}
