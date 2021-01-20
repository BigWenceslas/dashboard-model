<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use URL;
use App\BanniereAccueil;
use App\Temoignage;

class FrontController extends Controller
{
    
    public function index(Request $request)
    {
        
        $bannieres  = BanniereAccueil::orderBy('id', 'desc')->get();
        $temoignages  = Temoignage::has('commentor','>=',0)->where('etat','publie')->orderBy('id', 'desc')->get();
        
        return view('welcome', compact('bannieres','temoignages'));
    } 

    public function vitrine(Request $request)
    {
        
        $bannieres  = BanniereAccueil::orderBy('id', 'desc')->withTranslations()->get();
        $temoignages  = Temoignage::has('commentor')->where('etat','publie')->orderBy('id', 'desc')->get();
        //dd($bannieres);
        return view('vitrine', compact('bannieres','temoignages'));
    }

    public function redirect(Request $request){
        if(!session()->has('locale')) {
            session(['locale' => $request->getPreferredLanguage(config('app.locales'))]);
        }
        $locale = session('locale');
        app()->setLocale($locale);
        setlocale(LC_TIME, app()->environment('local') ? $locale : config('locale.languages')[$locale][1]);
        return redirect()->route('home',['locale'=>$locale]);
    }

    public function language(Request $request, String $locale)
    {
        
        $segments = explode('/', str_replace(''.url('').'', '', URL::previous()));
        $segments = array_values(array_filter($segments, function ($value) {
            return $value !== '';
        }));

        $segments[0] = $locale;

        $newUrl = implode('/', $segments);
        if (array_key_exists('QUERY_STRING', $_SERVER) && !empty($_SERVER['QUERY_STRING']))
            $newUrl .= '?'.$_SERVER['QUERY_STRING'];

        return redirect()->to($newUrl);

    }

}
