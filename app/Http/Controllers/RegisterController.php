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
use App\Competence;
use App\Entreprise;
use App\CategoriesEntreprise;

class RegisterController extends Controller
{
    use AuthenticatesUsers;
    public function register_type()
    {
        return view('register.register_type');
    }

    public function createStudent(Request $request)
    {
        //dd($request->titre_experience2);
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required|unique:users',

            'diplome1' => 'required',
            'fichier_diplome1' => 'required',
            'annee_obtention1' => 'required',
        ],[
        'email.unique' => 'Cette adresse email est déjà utilisée!'
       ]);

            
    $folderName = "storage/etudiants/";
    $unique_photo_name = "";
        if ($request->hasFile('photo')) {
            $unique_photo_name = md5($request->file('photo')->getFileName(). time()).".".$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move($folderName,$unique_photo_name);
        }
    //Set Role
    $role_etudiant_id = DB::table('roles')->where('roles.name','=','etudiant')->first()->id;
    //End retrieve role

        $user = User::create([
            'name' => $request->lastname." ".$request->firstname,
            'email' => $request->email,
            'prenom' => $request->firstname,
            'nom' => $request->nom,
            'avatar' => "etudiants/" . $unique_photo_name,
            'fonction' => $request->fonction,
            'password' => Hash::make($request->password),
            'role_id' =>$role_etudiant_id
        ]);
    //Donnees Supplementaires
    $donnees_comptes = new DonneesCompte();
    if ($request->hasFile('cv')) {
        $unique_cv_name = md5($request->file('cv')->getFileName(). time()). "." . $request->file('cv')->getClientOriginalExtension();
        $donnees_comptes->cv = $unique_cv_name;
        $request->file('cv')->move($folderName,$unique_cv_name);
    }
    $donnees_comptes->telephone = $request->tel.$request->phoneNumber;
    $donnees_comptes->email = $request->email;
    $donnees_comptes->nom = $request->lastname;
    $donnees_comptes->prenom = $request->firstname;
    $donnees_comptes->dernier_diplome = $request->dernier_diplome;
    $donnees_comptes->type_stage_recherche = $request->type_stage_recherche;
    $donnees_comptes->duree_stage_souhaitee = $request->duree_stage_souhaitee;
    $donnees_comptes->pays = $request->pays;
    $donnees_comptes->ville = $request->ville;
    $donnees_comptes->lettre_motivation = $request->lettre_motivation;
    $donnees_comptes->photo = $unique_photo_name;
    
    if ($request->newsletter_whatsapp == "on") {
       $donnees_comptes->newsletter_whatsapp = 1;
    }
    if ($request->abonne_newsletter == "on") {
       $donnees_comptes->abonne_newsletter = 1;
    }

    $donnees_comptes->type_compte = "Etudiant";
    $donnees_comptes->user_id = $user->id;

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
    if ($request->titre_experience1 && $request->entreprise_experience1 && 
    $request->date_debut_experience1 && $request->date_fin_experience1) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'poste' => $request->titre_experience1,
            'entreprise' => $request->entreprise_experience1,
            'date_debut' => $request->date_debut_experience1,
            'date_fin' => $request->date_fin_experience1,
            'user_data' => $donnees_comptes->id
    ]);
    }


    if ($request->titre_experience2 && $request->entreprise_experience2 && 
    $request->date_debut_experience2 && $request->date_fin_experience2) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'poste' => $request->titre_experience2,
            'entreprise' => $request->entreprise_experience2,
            'date_debut' => $request->date_debut_experience2,
            'date_fin' => $request->date_fin_experience2,
            'user_data' => $donnees_comptes->id
    ]);
    }


    if ($request->titre_experience3 && $request->entreprise_experience3 && 
    $request->date_debut_experience3 && $request->date_fin_experience3) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'poste' => $request->titre_experience3,
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

    toastr()->success('Votre compte Etudiant a ete cree avec succes!');
    return redirect()->route('profile_etudiant');
    }

    public function createFreelance(Request $request)
    {
        //dd($request->titre_experience2);
       $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'phoneNumber' => 'required',
        'email' => 'required|unique:users',

        'diplome1' => 'required',
        'fichier_diplome1' => 'required',
        'annee_obtention1' => 'required',
    ],[
        'email.unique' => 'Cette adresse email est déjà utilisée!'
       ]);

        
       $folderName = "storage/freelances/";
       if ($request->hasFile('photo')) {
           $unique_photo_name = md5($request->file('photo')->getFileName(). time()).".".$request->file('photo')->getClientOriginalExtension();
           $request->file('photo')->move($folderName,$unique_photo_name);
       }
    //Set Role
    $role_freelance_id = DB::table('roles')->where('roles.name','=','freelance')->first()->id;
    //End retrieve role

    $user = User::create([
        'name' => $request->lastname." ".$request->firstname,
        'email' => $request->email,
        'prenom' => $request->firstname,
        'nom' => $request->nom,
        'avatar' => "freelances/" . $unique_photo_name,
        'password' => Hash::make($request->password),
        'role_id' =>$role_freelance_id
    ]);
    //Donnees Supplementaires
    $photo = "";
    $cv = "";
    
    $donnees_comptes = new DonneesCompte();
    if ($request->hasFile('cv')) {
        $unique_cv_name = md5($request->file('cv')->getFileName(). time()). "." . $request->file('cv')->getClientOriginalExtension();
        $donnees_comptes->cv = $unique_cv_name;
        $request->file('cv')->move($folderName,$unique_cv_name);
    }
    $donnees_comptes->telephone = $request->tel.$request->phoneNumber;
    $donnees_comptes->email = $request->email;
    $donnees_comptes->nom = $request->lastname;
    $donnees_comptes->prenom = $request->firstname;
    $donnees_comptes->dernier_diplome = $request->dernier_diplome;
    $donnees_comptes->type_stage_recherche = $request->type_stage_recherche;
    $donnees_comptes->duree_stage_souhaitee = $request->duree_stage_souhaitee;
    $donnees_comptes->pays = $request->pays;
    $donnees_comptes->ville = $request->ville;
    $donnees_comptes->lettre_motivation = $request->lettre_motivation;
    $donnees_comptes->photo = $unique_photo_name;
    
    if ($request->newsletter_whatsapp == "on") {
       $donnees_comptes->newsletter_whatsapp = 1;
    }
    if ($request->abonne_newsletter == "on") {
       $donnees_comptes->abonne_newsletter = 1;
    }

    $donnees_comptes->type_compte = "freelance";
    $donnees_comptes->user_id = $user->id;

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
    if ($request->titre_experience1 && $request->entreprise_experience1 && 
    $request->date_debut_experience1 && $request->date_fin_experience1) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'poste' => $request->titre_experience1,
            'entreprise' => $request->entreprise_experience1,
            'date_debut' => $request->date_debut_experience1,
            'date_fin' => $request->date_fin_experience1,
            'user_data' => $donnees_comptes->id
    ]);
    }


    if ($request->titre_experience2 && $request->entreprise_experience2 && 
    $request->date_debut_experience2 && $request->date_fin_experience2) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'poste' => $request->titre_experience2,
            'entreprise' => $request->entreprise_experience2,
            'date_debut' => $request->date_debut_experience2,
            'date_fin' => $request->date_fin_experience2,
            'user_data' => $donnees_comptes->id
    ]);
    }


    if ($request->titre_experience3 && $request->entreprise_experience3 && 
    $request->date_debut_experience3 && $request->date_fin_experience3) {
    $exp_pro = ExperiencesProfessionnelle::create([
            'poste' => $request->titre_experience3,
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
    toastr()->success('Votre compte Freelance a ete cree avec succes!');
    return redirect()->route('profile_freelance');
    }

    public function createEntreprise(Request $request)
    {
        
       $validatedData = $request->validate([
        'nom' => 'required',
        'telephone' => 'required',
        'email' => 'required|unique:users',

        'format_juridique' => 'required',
        'profil_recherches' => 'required',
        'formation_recherchee' => 'required',
       ],[
        'email.unique' => 'Cette adresse email est déjà utilisée!'
       ]);
       
    $folderName = "storage/entreprises/";
    $unique_photo_name = "";
    if ($request->hasFile('logo')) {
        $unique_photo_name = md5($request->file('logo')->getFileName(). time()).".".$request->file('logo')->getClientOriginalExtension();
        $request->file('logo')->move($folderName,$unique_photo_name);
    }
    //Set Role
    $role_entreprise_id = DB::table('roles')->where('roles.name','=','entreprise')->first()->id;
    //End retrieve role
    
    $user = User::create([
        'name' => $request->nom,
        'email' => $request->email,
        'nom' => $request->nom,
        'avatar' => "entreprises/" . $unique_photo_name,
        'password' => Hash::make($request->password),
        'role_id' => $role_entreprise_id
    ]);
    //dd($user);
    //Donnees Supplementaires
    
    $donnees_comptes = new DonneesCompte();
    $donnees_comptes->telephone = $request->tel . $request->phoneNumber;
    $donnees_comptes->email = $request->email;
    $donnees_comptes->nom = $request->nom;
    $donnees_comptes->prenom = $request->nom;
    $donnees_comptes->pays = $request->pays;
    $donnees_comptes->ville = $request->ville;
    $donnees_comptes->formation_recherchee = $request->formation_recherchee;
    $donnees_comptes->profil_recherche = $request->profil_recherches;
    $donnees_comptes->format_juridique = $request->format_juridique;
    $donnees_comptes->date_creation_entreprise = $request->date_creation;
    $donnees_comptes->description_entreprise = $request->description;
    $donnees_comptes->logo =$folderName . $unique_photo_name;
    
    if ($request->newsletter_whatsapp == "on") {
       $donnees_comptes->newsletter_whatsapp = 1;
    }
    if ($request->abonne_newsletter == "on") {
       $donnees_comptes->abonne_newsletter = 1;
    }

    $donnees_comptes->type_compte = "entreprise";
    $donnees_comptes->user_id = $user->id;

    $donnees_comptes->save();
    
    //Entreprise publique
    $entreprise = new Entreprise();
    $entreprise->nom = $request->nom;
    $entreprise->pays = $request->pays;
    $entreprise->ville = $request->ville;
    $entreprise->statut = 0;
    $entreprise->description = $request->description;
    $entreprise->categorie = $request->categorie;
    $entreprise->slug = str_slug($request->nom);
    $entreprise->logo = 'entreprises/' . $unique_photo_name;
    $entreprise->user_id = $user->id;
    $entreprise->save();
    //Fin Entreprise publique
    
    auth()->login($user);
    toastr()->success('Votre compte Entreprise a ete cree avec succes!');
    return redirect()->route('profile_entreprise');
    }

     public function createStartup(Request $request)
    {
        //dd($request->titre_experience2);
       $validatedData = $request->validate([
        'nom' => 'required',
        'telephone' => 'required',
        'email' => 'required|unique:users',

        'format_juridique' => 'required',
        'profil_recherches' => 'required',
        'formation_recherchee' => 'required',
    ],[
        'email.unique' => 'Cette adresse email est déjà utilisée!'
       ]);

    $unique_photo_name = "";
    $folderName = "storage/startups/";
    if ($request->hasFile('logo')) {
        $unique_photo_name = md5($request->file('logo')->getFileName(). time()).".".$request->file('logo')->getClientOriginalExtension();
        $request->file('logo')->move($folderName,$unique_photo_name);
    }
    //Set Role
    $role_startup_id = DB::table('roles')->where('roles.name','=','startup')->first()->id;
    //End retrieve role

    $user = User::create([
        'name' => $request->nom,
        'email' => $request->email,
        'nom' => $request->nom,
        'avatar' => "startups/" . $unique_photo_name,
        'password' => Hash::make($request->password),
        'role_id' =>$role_startup_id
    ]);
    //Donnees Supplementaires
    
    $donnees_comptes = new DonneesCompte();
    $donnees_comptes->telephone = $request->tel . $request->phoneNumber;
    $donnees_comptes->email = $request->email;
    $donnees_comptes->nom = $request->nom;
    $donnees_comptes->prenom = $request->nom;
    $donnees_comptes->pays = $request->pays;
    $donnees_comptes->ville = $request->ville;
    $donnees_comptes->formation_recherchee = $request->formation_recherchee;
    $donnees_comptes->profil_recherche = $request->profil_recherches;
    $donnees_comptes->format_juridique = $request->format_juridique;
    $donnees_comptes->date_creation_entreprise = $request->date_creation;
    $donnees_comptes->description_entreprise = $request->description;
    $donnees_comptes->logo = $folderName . $unique_photo_name;
    
    if ($request->newsletter_whatsapp == "on") {
       $donnees_comptes->newsletter_whatsapp = 1;
    }
    if ($request->abonne_newsletter == "on") {
       $donnees_comptes->abonne_newsletter = 1;
    }

    $donnees_comptes->type_compte = "startup";
    $donnees_comptes->user = $user->id;

    $donnees_comptes->save();

    //Entreprise publique
    $entreprise = new Entreprise();
    $entreprise->nom = $request->nom;
    $entreprise->pays = $request->pays;
    $entreprise->ville = $request->ville;
    $entreprise->statut = 0;
    $entreprise->description = $request->description;
    $entreprise->categorie = $request->categorie;
    $entreprise->slug = str_slug($request->nom);
    $entreprise->logo = "startups/" . $unique_photo_name;
    $entreprise->user_id = $user->id;
    $entreprise->save();
    //Fin Entreprise publique
    
    
    auth()->login($user);
    toastr()->success('Votre compte StartUp a ete crée avec succes!');
    return redirect()->route('profile_startup');
    }

    public function register_startup()
    {
        $categories = CategoriesEntreprise::get();
        return view('register.startup.register_startup',compact(['categories']));
    }

    public function register_entreprise()
    {
        $categories = CategoriesEntreprise::get();
        return view('register.entreprise.register_entreprise',compact(['categories']));
    }

    public function register_freelance()
    {
        $categories = CategoriesEntreprise::get();
        return view('register.freelance.register_freelance',compact(['categories']));
    }

    public function register_student()
    {
        return view('register.etudiant.register_student');
    }

}
