<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use App;
Use App\Service;
use App\EvaluationsEntreprisesClient;
use App\EvaluationsEntreprisesDeveloppement;
use App\EvaluationsEntreprisesPerformance;
use App\EvaluationsEntreprisesProbleme;
use App\EvaluationsEntreprisesProduit;
use App\DonneesEvaluation;
use App\ServicesEvenementiel;
use App\Evenement;
use PragmaRX\Countries\Package\Countries;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $service
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $service)
    {
        $devise = DB::table('configurations')
                    ->where('configurations.cle','=','devise')
                    ->first();
        $categories_services = DB::table('categories_services')->get();
        $service = Service::where('slug', $service)->first();
        $reponses = [];
        if (strtolower($service->nom) == "evaluation de votre entreprise") {
            $problemes = EvaluationsEntreprisesProbleme::orderBy('ordre','asc')->get();
            $clients = EvaluationsEntreprisesClient::orderBy('ordre','asc')->get();
            $produits = EvaluationsEntreprisesProduit::orderBy('ordre','asc')->get();
            $performances = EvaluationsEntreprisesPerformance::orderBy('ordre','asc')->get();
            $developpements = EvaluationsEntreprisesDeveloppement::orderBy('ordre','asc')->get();
            if (Auth()->user()) {
                $reponses = DonneesEvaluation::where('user_id',Auth()->user()->id)->first();
                if($reponses){
                    $tab = @unserialize($reponses->contenu);array_shift($tab);
                    $reponses->contenu = $tab; 
                  //  dd($reponses->contenu);
                }
            }
            return view('services.details-evaluation',compact('service','categories_services','devise','problemes','clients' ,'produits','performances','developpements','reponses'));
        }elseif(strpos($service->slug, 'mise-en-relation') !== null){
            return redirect()->route('services.evenement',['locale' => App::getLocale(),'slug' => $service->slug]);
        }else{
            return redirect()->route('contactus.index',['locale' => App::getLocale()]);
        }
    }

     /**
     * Display the specified resource.
     *
     * @param  string  $service
     * @return \Illuminate\Http\Response
     */
    public function evenement($locale, $service)
    {
        $countries = new Countries();
        $all_countries = $countries->all();

        $service = Service::where('slug', $service)->first();
        $events = ServicesEvenementiel::get()->take(2);
        
        return view('services.evenement',compact('service','events','all_countries'));
    }

    public function event_request(Request $request){

        $event = new Evenement();
        $event->nom = $request->nom;
        $event->entreprise = $request->entreprise;
        $event->telephone = $request->telephone;
        $event->email = $request->email;
        $event->ville = $request->ville;
        $event->pays = $request->pays;
        $event->besoin = $request->vous_recherchez;
        $event->lieu = $request->ville_hote;
        $event->budget = $request->budget;
        $event->duree = $request->duree;
        $event->sujet_discussion = $request->sujet;
        $event->save();

        toastr()->success('Votre requete a été prise en compte!');
        return redirect()->route('services.evenement',['locale' => App::getLocale(),'slug' => $request->slug]);
    }

     public function event_intermediation_request(Request $request){
        return redirect()->route('services.evenement',['locale' => App::getLocale(),'slug' => $request->slug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param  string  $service
     * @return \Illuminate\Http\Response
     */
    public function service_login($locale, $name)
    {
        $devise = DB::table('configurations')
                    ->where('configurations.cle','=','devise')
                    ->first();
        $categories_services = DB::table('categories_services')->get();
        $service = Service::where('slug', $service)->first();
        $reponses = [];
        if (strtolower($service->nom) == "evaluation de votre entreprise") {
            $problemes = EvaluationsEntreprisesProbleme::orderBy('ordre','asc')->get();
            $clients = EvaluationsEntreprisesClient::orderBy('ordre','asc')->get();
            $produits = EvaluationsEntreprisesProduit::orderBy('ordre','asc')->get();
            $performances = EvaluationsEntreprisesPerformance::orderBy('ordre','asc')->get();
            $developpements = EvaluationsEntreprisesDeveloppement::orderBy('ordre','asc')->get();
            if (Auth()->user()) {
                $reponses = DonneesEvaluation::where('user_id',Auth()->user()->id)->first();
            }
            return view('services.details-evaluation',compact('service','categories_services','devise','problemes','clients' ,'produits','performances','developpements'));
        }else{
            return redirect()->route('contactus.index');
        }
    }

    public function storeEvaluation(Request $request){

        $values = array();$pourcentage_completion = 0;$colonne_remplies = 0;
        parse_str($request->data_form, $values);
        $token = array_shift($values);
        foreach ($values as $key => $value) {
            if (strlen(trim($value))>0) {
                $colonne_remplies++;
            }
        }
        $pourcentage_completion = ($colonne_remplies/count($values))*100;
       $donnees = DonneesEvaluation::where('user_id','=',Auth()->user()->id)->first();
        if ($donnees) {
            $donnees->contenu = @serialize($values);
            $donnees->pourcentage_completion = round($pourcentage_completion,2)."%";
            $donnees->save();
        } else {
            $donnees = new DonneesEvaluation;
            $donnees->user_id = Auth()->user()->id;
            $donnees->contenu = @serialize($values);
            $donnees->pourcentage_completion = round($pourcentage_completion,2)."%";
            $donnees->save();
        }

        return response()->json(['success' => $values], 200);
    }
}
