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
    $folderName = ucfirst(strtolower(date("M").date("Y")));
    if (!file_exists($folderName)) {
        mkdir("public/storage/users/" . $folderName);
    }
    
    $donnees_comptes = new DonneesCompte();
    
    if ($request->cv) {
        $donnees_comptes->cv = $request->cv->getFileName();
    }if ($request->photo) {
        $donnees_comptes->photo = $request->photo->getFileName();
    }
    $donnees_comptes->telephone = $request->tel.$request->phoneNumber;
    $donnees_comptes->email = $request->email;
    $donnees_comptes->nom = $request->nom;
    $donnees_comptes->dernier_diplome = $request->dernier_diplome;
    $donnees_comptes->type_stage_recherche = $request->type_stage_recherche;
    $donnees_comptes->duree_stage_souhaitee = $request->duree_stage_souhaitee;
    
    $donnees_comptes->newsletter_whatsapp = $request->photo;
    $donnees_comptes->abonne_newsletter = $request->photo;

    $donnees_comptes->type_compte = "Etudiant";
    $donnees_comptes->user = $user;

    $donnees_comptes->save();
    //Cursus Academique
    $cursus_academique = User::create([
        'telephone' => $request->lastname." ".$request->firstname,
        'email' => $request->email,
        'prenom' => $request->firstname,
        'nom' => $request->nom,
        'fonction' => $request->fonction,
        'password' => Hash::make($request->password),
    ]);
    //Exp Pro
    $user = User::create([
        'name' => $request->lastname." ".$request->firstname,
        'email' => $request->email,
        'prenom' => $request->firstname,
        'nom' => $request->nom,
        'fonction' => $request->fonction,
        'password' => Hash::make($request->password),
    ]);
    //References
    $user = User::create([
        'name' => $request->lastname." ".$request->firstname,
        'email' => $request->email,
        'prenom' => $request->firstname,
        'nom' => $request->nom,
        'fonction' => $request->fonction,
        'password' => Hash::make($request->password),
    ]);
    //Competences
    $user = User::create([
        'name' => $request->lastname." ".$request->firstname,
        'email' => $request->email,
        'prenom' => $request->firstname,
        'nom' => $request->nom,
        'fonction' => $request->fonction,
        'password' => Hash::make($request->password),
    ]);
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
