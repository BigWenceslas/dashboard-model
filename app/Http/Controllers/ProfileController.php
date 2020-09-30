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

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.entreprise.profile',compact(['user']));
    }
    public function startup()
    {
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.startup.profile',compact(['user']));
    }
    public function freelance()
    {
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.freelance.profile',compact(['user']));
    }
    public function etudiant()
    {
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.etudiant.profile',compact(['user']));
    }
}
