<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BanniereAccueil;
use App\Temoignage;

class RegisterController extends Controller
{
    public function register_type()
    {
        return view('register.register_type');
    }

}
