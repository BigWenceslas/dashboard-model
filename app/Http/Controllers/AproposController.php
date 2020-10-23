<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Entreprise;

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
        $entreprises = Entreprise::where('statut','=','verifie')->paginate(5);
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
    public function show($id)
    {
        $entreprise = DB::table('entreprises')->where('entreprises.id','=',$id)->first();
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
}
