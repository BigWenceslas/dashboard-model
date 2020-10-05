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
        $all_countries = $countries->sortBy('name')->all();
        $user = User::has('getUserData')->find(auth::id());
        return view('register.entreprise.profile',compact(['user','all_countries']));
    }


    public function entreprise_editer_description(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->description_entreprise = $request->description_entreprise;
        //Video
        if ($request->file('video_presentation')){
            $unique_video_name = md5($request->file('video_presentation')->getFileName(). time()).".".$request->file('video_presentation')->getClientOriginalExtension();
            $donnees->video = $unique_video_name;
            $request->file('video_presentation')->move("storage/entreprises/video/",$unique_video_name);
            $donnees->video = $unique_video_name;
        }
        //Fin Video
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
        $donnees->pays = $request->pays;
        $donnees->ville = $request->ville;
        $donnees->date_creation_entreprise = $request->date_creation;
        //logo
        if ($request->hasFile('logo')) {
            $unique_logo_name = md5($request->file('logo')->getFileName(). time()).".".$request->file('logo')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('logo')->move("storage/entreprises/",$unique_logo_name);
        }
        //Fin logo
        $donnees->profil_recherche = $request->profils_recherches;
        $donnees->formation_recherchee = $request->formation_recherchee;
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
        $donnees->description_entreprise = $request->description_entreprise;
        //Video
        if ($request->file('video_presentation')){
            $unique_video_name = md5($request->file('video_presentation')->getFileName(). time()).".".$request->file('video_presentation')->getClientOriginalExtension();
            $donnees->video = $unique_video_name;
            $request->file('video_presentation')->move("storage/startups/video/",$unique_video_name);
            $donnees->video = $unique_video_name;
        }
        //Fin Video
        $donnees->save();
        return redirect()->route('profile_startup');
    }

    public function startup_editer_presentation(Request $request)
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
        return redirect()->route('profile_startup');
    }

    public function startup_editer_informations(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->pays = $request->pays;
        $donnees->ville = $request->ville;
        $donnees->date_creation_entreprise = $request->date_creation;
        //logo
        if ($request->hasFile('logo')) {
            $unique_logo_name = md5($request->file('logo')->getFileName(). time()).".".$request->file('logo')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('logo')->move("storage/startups/",$unique_logo_name);
        }
        //Fin logo
        $donnees->profil_recherche = $request->profils_recherches;
        $donnees->formation_recherchee = $request->formation_recherchee;
        $donnees->save();

        toastr()->success('Votre informations ont été modifié avec succes!');
        return redirect()->route('profile_startup');
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
        $competences = Competence::where('user_data','=',$user->getUserData->id)->get();
        return view('register.etudiant.profile',compact(['user','all_countries','competences']));

    }

    public function etudiant_editer_description(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->lettre_motivation = $request->lettre_motivation;
        //Video
        if ($request->file('video_presentation')){
            $unique_video_name = md5($request->file('video_presentation')->getFileName(). time()).".".$request->file('video_presentation')->getClientOriginalExtension();
            $donnees->video = $unique_video_name;
            $request->file('video_presentation')->move("storage/etudiants/video/",$unique_video_name);
            $donnees->video = $unique_video_name;
        }
        //Fin Video
        $donnees->save();

        toastr()->success('Votre compte a été modifié avec succes!');
        return redirect()->route('profile_etudiant');
    }



    public function etudiant_editer_informations(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->nom = $request->nom;
        $donnees->prenom = $request->prenom;
        $donnees->pays = $request->pays;
        $donnees->ville = $request->ville;
        $donnees->pays = $request->pays;
        $donnees->telephone = $request->telephone;
        $donnees->email = $request->email;
        $donnees->type_stage_recherche = $request->type_stage_recherche;
        $donnees->duree_stage_souhaitee = $request->duree_stage_recherche;
        //logo
        if ($request->hasFile('photo')) {
            $unique_logo_name = md5($request->file('photo')->getFileName(). time()).".".$request->file('photo')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('photo')->move("storage/etudiants/",$unique_logo_name);
        }
        //Fin logo

        //cv
        if ($request->hasFile('cv')) {
            $unique_logo_name = md5($request->file('cv')->getFileName(). time()).".".$request->file('cv')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('cv')->move("storage/etudiants/",$unique_logo_name);
        }
        //Fin cv


        //dernier diplome
        if ($request->hasFile('dernier_diplome')) {
            $unique_logo_name = md5($request->file('dernier_diplome')->getFileName(). time()).".".$request->file('dernier_diplome')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('dernier_diplome')->move("storage/etudiants/",$unique_logo_name);
        }
        //Fin dernier diplome
        $donnees->save();

        toastr()->success('Votre informations ont été modifié avec succes!');
        return redirect()->route('profile_etudiant')->with('onglet', 'informations');
    }

    //Create competences
    public function etudiant_competences_create(Request $request)
    {
        $donnees = new Competence();
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
        $donnees->user_data = $request->donnees_id;
       
        $donnees->save();

        toastr()->success('Votre compétence a été ajoutée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'competences');
    }

    //Create competences
    public function etudiant_competences_update(Request $request)
    {
        $donnees = Competence::find($request->competence_edit_id);
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
       
        $donnees->save();

        toastr()->success('Votre compétence a été modifiée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'competences');
    }

    public function etudiant_competences_delete($id)
    {
        $competence = Competence::find($id);
        $competence->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
