<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Entreprise;
use App\Temoignage;
use Illuminate\Support\Facades\Auth;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('apropos.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function a_propos()
    {
        $nbre_entreprises  = DB::table('entreprises')->count();
        $nbre_formations_gratuites = DB::table('formations')
                                        ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                        ->where('categories_formations.nom','=','Nos Formations gratuites')
                                        ->count();
        $ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                        ->groupBy('ville')->get(); 
        $categories_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, categorie'))->groupBy('categorie')->get();
        $entreprises = Entreprise::get();

        return view('apropos.index',compact('nbre_entreprises','nbre_formations_gratuites','ville_stockes','entreprises','categories_stockes'));
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
        
        $nbre_entreprises  = DB::table('entreprises')->count();
        $nbre_formations_gratuites = DB::table('formations')
                                        ->join('categories_formations','categories_formations.id','formations.categorie_id')
                                        ->where('categories_formations.nom','=','Nos Formations gratuites')
                                        ->count();
        
        $ville_stockes = DB::table('entreprises')
                                        ->selectRaw('count(id) as nbre, ville')
                                        ->groupBy('ville')
                                        ->lists('count', 'ville');
        return view('apropos.index', compact('nbre_entreprises','nbre_formations_gratuites','ville_stockes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id)
    {
        $entreprise = Entreprise::find($id);
        return view('apropos.show', compact('entreprise'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function a_propos_all()
    {
        $ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                        ->groupBy('ville')->get(); 

        $categories_stockes = DB::table('entreprises')->select(DB::raw('count(entreprises.id) as nbre, categories_entreprises.nom as categorie'))
                        ->join('categories_entreprises', 'entreprises.categorie', '=', 'categories_entreprises.id')
                        ->groupBy('categories_entreprises.nom')->get();
        $entreprises = Entreprise::where('ville','!=',null)->paginate(6);
        
        return view('apropos.index',compact('ville_stockes','entreprises','categories_stockes'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_enterprise(Request $request)
    {
        $ville_stockes = DB::table('entreprises')->select(DB::raw('count(id) as nbre, ville'))
                        ->groupBy('ville')->get(); 
        $categories_stockes = DB::table('entreprises')->select(DB::raw('count(entreprises.id) as nbre, categories_entreprises.nom as categorie'))
                        ->join('categories_entreprises', 'entreprises.categorie', '=', 'categories_entreprises.id')
                        ->groupBy('categories_entreprises.nom')->get();
        if ($request->nom_ville == "" && $request->recherche == "") {
        $entreprises = Entreprise::has('getCategoriesEntreprise')->where('ville','!=',null)->paginate(6);
        }
        elseif ($request->nom_ville == "" && $request->recherche != "") {
        $entreprises = Entreprise::where('nom','like','%'.$request->recherche.'%')->where('ville','!=',null)->paginate(6);
        }
        elseif ($request->nom_ville != "" && $request->recherche == "") {
        $entreprises = Entreprise::where('ville','=',$request->nom_ville)->where('ville','!=',null)->paginate(6);
        }
        elseif ($request->nom_ville != "" && $request->recherche != "") {
        $entreprises = Entreprise::where('nom','like','%'.$request->recherche.'%')
            ->where('ville','=',$request->nom_ville)->where('ville','!=',null)->paginate(6);
        } 
       //dd($entreprises);  
        return view('apropos.index',compact('ville_stockes','entreprises','categories_stockes'));
    }

    public function createAvis(Request $request){
        $temoignage = new Temoignage;
        $temoignage->texte = $request->texte;
        if(auth::user()){
            $temoignage->user = auth::id();
        }
        $temoignage->nom = $request->nom;
        $temoignage->prenom = $request->prenom;
        $temoignage->email = $request->email;
        $temoignage->etat = 'moderation';
        $temoignage->save();
        return response()->json(['success' => 'Record created successfully!']);
    }
}
