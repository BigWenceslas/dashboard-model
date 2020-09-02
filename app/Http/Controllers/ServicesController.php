<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devise = DB::table('configurations')
                    ->where('configurations.cle','=','devise')
                    ->first();
        $categories_services = DB::table('categories_services')->get();
        $service = DB::table('services')->where('services.slug','=',$id)
                    ->select('services.*','categories_services.nom as nomCategorie')
                    ->join('categories_services','categories_services.id','services.categorie_id')
                    ->first();
        if (strtolower($service->nom) == "evaluation startup") {
       return view('services.details-evaluation',compact('service','categories_services','devise'));
        }else{
       return view('services.show',compact('service','categories_services','devise'));
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
