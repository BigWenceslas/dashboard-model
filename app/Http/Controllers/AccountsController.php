<?php

namespace App\Http\Controllers;

use App\Service\ServiceManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{
    public function reinitialiser_mot_de_passe()
    {

    return view('login.reset_password_request');
    }

    public function reset_password_request($email)
    {

    }

    public function reset_password_form($email)
    {

    }

    public function password_reset(Request $request)
    {

    }
}