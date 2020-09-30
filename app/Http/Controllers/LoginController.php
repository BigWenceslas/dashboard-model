<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BanniereAccueil;
use App\Temoignage;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        //$this->validateLogin($request);

        /* if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        } */
        // $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role_id == 1) {
                return response()->json([
                    'success' => 1,
                    'role' => 'admin'
                ], 200);
            } else {
                return response()->json([
                    'success' => 1,
                    'role' => 'other'
                ], 200);
            }
        }else {
            //$this->incrementLoginAttempts($request);
            return response()->json([
                'error' => 'Identifiants invalides.'
            ], 200);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }
}
