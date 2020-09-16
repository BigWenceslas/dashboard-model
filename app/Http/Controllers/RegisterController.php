<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BanniereAccueil;
use App\Temoignage;

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
        'diplome2' => 'required',
        'fichier_diplome2' => 'required',
        'annee_obtention2' => 'required',
        'diplome3' => 'required',
        'fichier_diplome3' => 'required',
        'annee_obtention3' => 'required',
    ]);
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

}
