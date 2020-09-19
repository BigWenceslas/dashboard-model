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

    //Cursus Academique

    //Exp Pro

    //References

    //Competences
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
