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
    //Entreprises
    public function index()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        $user = User::has('getUserData')->find(auth::id());
        return view('register.entreprise.profile',compact(['user','all_countries']));
    }


    public function entreprise_editer_description(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->save();

        toastr()->success('Votre compte a été modifié avec succes!');
        return redirect()->route('profile_entreprise');
    }

    public function entreprise_editer_presentation(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->nom = $request->nom;
        $donnees->adresse = $request->adresse;
        $donnees->telephone = $request->telephone;
        $donnees->email = $request->email;
        $donnees->domaine_activite = $request->domaine_activite;
        $donnees->format_juridique = $request->format_juridique;
        $donnees->nombre_employes = $request->nombre_employes;
        $donnees->site_web = $request->site_web;
        $donnees->save();

        toastr()->success('Votre compte a été modifié avec succes!');
        return redirect()->route('profile_entreprise');
    }

    public function entreprise_editer_informations(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->save();

        toastr()->success('Votre informations ont été modifié avec succes!');
        return redirect()->route('profile_entreprise');
    }

    //Fin Entreprise
    //Startup
    public function startup()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        $user = User::has('getUserData')->find(Auth::id());
        return view('register.startup.profile',compact(['user','all_countries']));
    }

    public function startup_editer_description(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->description_entreprise = $request->description_entreprise;
        $donnees->save();
        return redirect()->route('profile_entreprise');
    }
    //Fin Startup
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
