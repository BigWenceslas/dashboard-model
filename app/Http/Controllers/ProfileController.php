<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('register.entreprise.profile');
    }
    public function startup()
    {
        return view('register.startup.profile');
    }
    public function freelance()
    {
        return view('register.freelance.profile');
    }
    public function etudiant()
    {
        return view('register.etudiant.profile');
    }
}
