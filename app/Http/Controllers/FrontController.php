<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BanniereAccueil;

class FrontController extends Controller
{
    
    public function index(Request $request)
    {
        
        $bannieres  = BanniereAccueil::orderBy('id', 'desc')->get();
        
        return view('welcome', compact('bannieres'));
    }

}
