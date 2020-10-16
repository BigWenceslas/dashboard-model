<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use App\Service;
use App\EvaluationsEntreprisesClient;
use App\EvaluationsEntreprisesDeveloppement;
use App\EvaluationsEntreprisesPerformance;
use App\EvaluationsEntreprisesProbleme;
use App\EvaluationsEntreprisesProduit;

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
        if (strtolower($service->nom) == "evaluation de votre entreprise") {
            $problemes = EvaluationsEntreprisesProbleme::orderBy('ordre','asc')->get();
            $clients = EvaluationsEntreprisesClient::orderBy('ordre','asc')->get();
            $produits = EvaluationsEntreprisesProduit::orderBy('ordre','asc')->get();
            $performances = EvaluationsEntreprisesPerformance::orderBy('ordre','asc')->get();
            $developpements = EvaluationsEntreprisesDeveloppement::orderBy('ordre','asc')->get();
            return view('services.details-evaluation',compact('service','categories_services','devise','problemes','clients' ,'produits','performances','developpements'));
        }else{
            return redirect()->route('contactus.index');
        }
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
