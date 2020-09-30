<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\DonneesCompte;
use App\CursusAcademique;
use App\ExperiencesProfessionnelle;
use App\Reference;
use App\Competence;
use App\Entreprise;
use PragmaRX\Countries\Package\Countries;

class ProfileController extends Controller
{
    public function index()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.entreprise.profile',compact(['user','all_countries']));
    }
    public function startup()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.startup.profile',compact(['user','all_countries']));
    }
    public function freelance()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.freelance.profile',compact(['user','all_countries']));
    }
    public function etudiant()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.etudiant.profile',compact(['user','all_countries']));
    }
}
