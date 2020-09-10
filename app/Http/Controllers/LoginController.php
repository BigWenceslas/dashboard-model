<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BanniereAccueil;
use App\Temoignage;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
}
