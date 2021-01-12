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
use App\CategoriesEntreprise;

class ProfileController extends Controller
{
    //Entreprises
    public function index()
    {
        $categories = CategoriesEntreprise::get();
        $user = User::has('getUserData')->has('entreprise')->find(auth::id());
        //dd($user);
        return view('register.entreprise.profile',compact(['user','categories']));
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
        //$donnees->domaine_activite = $request->domaine_activite;
        $donnees->format_juridique = $request->format_juridique;
        $donnees->nombre_employes = $request->nombre_employes;
        $donnees->site_web = $request->site_web;
        $donnees->save();
        //Edit enterprise data
        $donneesEntreprise = Entreprise::where('user_id','=',auth::id())->first();
        if($donneesEntreprise){
            $donneesEntreprise->categorie = $request->domaine_activite;
            $donneesEntreprise->save();
        }
        //End edit enterprise data

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
        $user = User::has('getUserData')->has('entreprise')->find(Auth::id());
        $categories = CategoriesEntreprise::get();
        return view('register.startup.profile',compact(['user','categories']));
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
        $donnees->format_juridique = $request->format_juridique;
        $donnees->nombre_employes = $request->nombre_employes;
        $donnees->site_web = $request->site_web;
        $donnees->save();

        //Edit enterprise data
        $donneesEntreprise = Entreprise::where('user_id','=',auth::id())->first();
        if($donneesEntreprise){
            $donneesEntreprise->categorie = $request->domaine_activite;
            $donneesEntreprise->save();
        }
        //End edit enterprise data

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

    //Etudiant

    public function etudiant()
    {
        $user = User::has('getUserData')->find(Auth::id());
        $competences = Competence::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        $cursus_academiques = CursusAcademique::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        $experiences_professionnelles = ExperiencesProfessionnelle::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        $references = Reference::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        return view('register.etudiant.profile',compact(['user','competences','cursus_academiques',
        'experiences_professionnelles','references']));

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
        return redirect()->route('profile_etudiant',['locale' => App::getLocale()]);
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
        return redirect()->route('profile_etudiant')->with('onglet', 'informations','locale');
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

    //Update competences
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

    //Create cursus_academique
    public function etudiant_cursus_academique_create(Request $request)
    {
        $donnees = new CursusAcademique();
        $donnees->user_data = $request->donnees_id;
        $donnees->titre = $request->cursus_titre;
        $donnees->annee = $request->cursus_annee;
        //document
        if ($request->hasFile('cursus_document')) {
            $unique_logo_name = md5($request->file('cursus_document')->getFileName(). time()).".".$request->file('cursus_document')->getClientOriginalExtension();
            $request->file('cursus_document')->move("storage/etudiants/cursus_academique/",$unique_logo_name);
            $donnees->document = $unique_logo_name;
        }
        //Fin cursus_document
        $donnees->save();

        toastr()->success('Votre compétence a été ajoutée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'cursus_academique');
    }

    //Update cursus_academique
    public function etudiant_cursus_academique_update(Request $request)
    {
        $donnees = CursusAcademique::find($request->cursus_academique_edit_id);
        $donnees->titre = $request->cursus_titre;
        $donnees->annee = $request->cursus_annee;
        //document
        if ($request->hasFile('cursus_document')) {
            $unique_logo_name = md5($request->file('cursus_document')->getFileName(). time()).".".$request->file('cursus_document')->getClientOriginalExtension();
            $donnees->document = $unique_logo_name;
            $request->file('cursus_document')->move("storage/etudiants/cursus_academique/",$unique_logo_name);
        }
        //Fin cursus_document
       
        $donnees->save();

        toastr()->success('Votre compétence a été modifiée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'cursus_academique');
    }

    public function etudiant_cursus_academique_delete($id)
    {
        $competence = CursusAcademique::find($id);
        $competence->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    //Create experience_professionnelle
    public function etudiant_experience_professionnelle_create(Request $request)
    {
        $donnees = new ExperiencesProfessionnelle();
        $donnees->poste = $request->exp_poste;
        $donnees->entreprise = $request->exp_entreprise;
        $donnees->date_debut = $request->exp_date_debut;
        $donnees->date_fin = $request->exp_date_fin;
        $donnees->user_data = $request->donnees_id;
       
        $donnees->save();

        toastr()->success('Votre expérience professionnelle a été ajoutée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'experience_professionnelle');
    }

    //Update experience_professionnelle
    public function etudiant_experience_professionnelle_update(Request $request)
    {
        $donnees = ExperiencesProfessionnelle::find($request->exp_edit_id);
        $donnees->poste = $request->exp_poste;
        $donnees->entreprise = $request->exp_entreprise;
        $donnees->date_debut = $request->exp_date_debut;
        $donnees->date_fin = $request->exp_date_fin;
       
        $donnees->save();

        toastr()->success('Votre expérience professionnelle a été modifiée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'experience_professionnelle');
    }

    public function etudiant_experience_professionnelle_delete($id)
    {
        $donnee = ExperiencesProfessionnelle::find($id);
        $donnee->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    //Create Reference
    public function etudiant_reference_create(Request $request)
    {
        $donnees = new Reference();
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
        $donnees->user_data = $request->donnees_id;
       
        $donnees->save();

        toastr()->success('Votre références a été ajoutée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'references');
    }

    //Update Reference
    public function etudiant_reference_update(Request $request)
    {
        $donnees = Reference::find($request->reference_edit_id);
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
       
        $donnees->save();

        toastr()->success('Votre références a été modifiée avec succès!');
        return redirect()->route('profile_etudiant')->with('onglet', 'references');
    }
    //Delete reference
    public function etudiant_reference_delete($id)
    {
        $reference = Reference::find($id);
        $reference->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    //FinEtudiant

    //Freelance


    public function freelance()
    {
        $user = User::has('getUserData')->find(Auth::id());
        $competences = Competence::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        $cursus_academiques = CursusAcademique::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        $experiences_professionnelles = ExperiencesProfessionnelle::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        $references = Reference::where('user_data','=',$user->getUserData->id)->orderBy('id','desc')->get();
        return view('register.freelance.profile',compact(['user','competences','cursus_academiques',
        'experiences_professionnelles','references']));
    }

    public function freelance_editer_description(Request $request)
    {
        $donnees = DonneesCompte::where('user_id','=',auth::id())->first();
        $donnees->lettre_motivation = $request->lettre_motivation;
        //Video
        if ($request->file('video_presentation')){
            $unique_video_name = md5($request->file('video_presentation')->getFileName(). time()).".".$request->file('video_presentation')->getClientOriginalExtension();
            $donnees->video = $unique_video_name;
            $request->file('video_presentation')->move("storage/freelances/video/",$unique_video_name);
            $donnees->video = $unique_video_name;
        }
        //Fin Video
        $donnees->save();

        toastr()->success('Votre compte a été modifié avec succes!');
        return redirect()->route('profile_freelance');
    }



    public function freelance_editer_informations(Request $request)
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
            $request->file('photo')->move("storage/freelances/",$unique_logo_name);
        }
        //Fin logo

        //cv
        if ($request->hasFile('cv')) {
            $unique_logo_name = md5($request->file('cv')->getFileName(). time()).".".$request->file('cv')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('cv')->move("storage/freelances/",$unique_logo_name);
        }
        //Fin cv


        //dernier diplome
        if ($request->hasFile('dernier_diplome')) {
            $unique_logo_name = md5($request->file('dernier_diplome')->getFileName(). time()).".".$request->file('dernier_diplome')->getClientOriginalExtension();
            $donnees->logo = $unique_logo_name;
            $request->file('dernier_diplome')->move("storage/freelances/",$unique_logo_name);
        }
        //Fin dernier diplome
        $donnees->save();

        toastr()->success('Votre informations ont été modifié avec succes!');
        return redirect()->route('profile_freelance')->with('onglet', 'informations');
    }

    //Create competences
    public function freelance_competences_create(Request $request)
    {
        $donnees = new Competence();
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
        $donnees->user_data = $request->donnees_id;
       
        $donnees->save();

        toastr()->success('Votre compétence a été ajoutée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'competences');
    }

    //Update competences
    public function freelance_competences_update(Request $request)
    {
        $donnees = Competence::find($request->competence_edit_id);
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
       
        $donnees->save();

        toastr()->success('Votre compétence a été modifiée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'competences');
    }

    public function freelance_competences_delete($id)
    {
        $competence = Competence::find($id);
        $competence->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    //Create cursus_academique
    public function freelance_cursus_academique_create(Request $request)
    {
        $donnees = new CursusAcademique();
        $donnees->user_data = $request->donnees_id;
        $donnees->titre = $request->cursus_titre;
        $donnees->annee = $request->cursus_annee;
        //document
        if ($request->hasFile('cursus_document')) {
            $unique_logo_name = md5($request->file('cursus_document')->getFileName(). time()).".".$request->file('cursus_document')->getClientOriginalExtension();
            $request->file('cursus_document')->move("storage/freelances/cursus_academique/",$unique_logo_name);
            $donnees->document = $unique_logo_name;
        }
        //Fin cursus_document
        $donnees->save();

        toastr()->success('Votre compétence a été ajoutée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'cursus_academique');
    }

    //Update cursus_academique
    public function freelance_cursus_academique_update(Request $request)
    {
        $donnees = CursusAcademique::find($request->cursus_academique_edit_id);
        $donnees->titre = $request->cursus_titre;
        $donnees->annee = $request->cursus_annee;
        //document
        if ($request->hasFile('cursus_document')) {
            $unique_logo_name = md5($request->file('cursus_document')->getFileName(). time()).".".$request->file('cursus_document')->getClientOriginalExtension();
            $donnees->document = $unique_logo_name;
            $request->file('cursus_document')->move("storage/freelances/cursus_academique/",$unique_logo_name);
        }
        //Fin cursus_document
       
        $donnees->save();

        toastr()->success('Votre compétence a été modifiée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'cursus_academique');
    }

    public function freelance_cursus_academique_delete($id)
    {
        $competence = CursusAcademique::find($id);
        $competence->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    //Create experience_professionnelle
    public function freelance_experience_professionnelle_create(Request $request)
    {
        $donnees = new ExperiencesProfessionnelle();
        $donnees->poste = $request->exp_poste;
        $donnees->entreprise = $request->exp_entreprise;
        $donnees->date_debut = $request->exp_date_debut;
        $donnees->date_fin = $request->exp_date_fin;
        $donnees->user_data = $request->donnees_id;
       
        $donnees->save();

        toastr()->success('Votre expérience professionnelle a été ajoutée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'experience_professionnelle');
    }

    //Update experience_professionnelle
    public function freelance_experience_professionnelle_update(Request $request)
    {
        $donnees = ExperiencesProfessionnelle::find($request->exp_edit_id);
        $donnees->poste = $request->exp_poste;
        $donnees->entreprise = $request->exp_entreprise;
        $donnees->date_debut = $request->exp_date_debut;
        $donnees->date_fin = $request->exp_date_fin;
       
        $donnees->save();

        toastr()->success('Votre expérience professionnelle a été modifiée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'experience_professionnelle');
    }

    public function freelance_experience_professionnelle_delete($id)
    {
        $donnee = ExperiencesProfessionnelle::find($id);
        $donnee->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    //Create Reference
    public function freelance_reference_create(Request $request)
    {
        $donnees = new Reference();
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
        $donnees->user_data = $request->donnees_id;
       
        $donnees->save();

        toastr()->success('Votre références a été ajoutée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'references');
    }

    //Update Reference
    public function freelance_reference_update(Request $request)
    {
        $donnees = Reference::find($request->reference_edit_id);
        $donnees->titre = $request->titre;
        $donnees->descriptif = $request->descriptif;
       
        $donnees->save();

        toastr()->success('Votre références a été modifiée avec succès!');
        return redirect()->route('profile_freelance')->with('onglet', 'references');
    }
    //Delete reference
    public function freelance_reference_delete($id)
    {
        $reference = Reference::find($id);
        $reference->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }


    //Fin Startup
}
