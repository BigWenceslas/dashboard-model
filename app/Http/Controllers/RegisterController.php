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
