<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BanniereAccueil;
use App\Temoignage;

class FrontController extends Controller
{
    
    public function index(Request $request)
    {
        
        $bannieres  = BanniereAccueil::orderBy('id', 'desc')->get();
        $temoignages  = Temoignage::has('commentor')->where('etat','publie')->orderBy('id', 'desc')->get();
       //dd($temoignages[0]->commentor->name);
        
        return view('welcome', compact('bannieres','temoignages'));
    } 

    public function vitrine(Request $request)
    {
        
        $bannieres  = BanniereAccueil::orderBy('id', 'desc')->get();
        $temoignages  = Temoignage::has('commentor')->where('etat','publie')->orderBy('id', 'desc')->get();
        
        return view('vitrine', compact('bannieres','temoignages'));
    }

}
