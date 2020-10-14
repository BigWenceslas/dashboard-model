<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Redirector;
use Carbon\Carbon;

use Closure;

class Localization
{
    public function __construct(Redirector $redirector) 
    {
      $this->redirector = $redirector;
    }
    public function handle($request, Closure $next)
    {
        // Make sure current locale exists.
        $locale = $request->segment(1);
        //dd($locale);

        if(!in_array($locale, config('app.locales'))) {
            $segments = $request->segments();
            array_unshift($segments,"fr");
            //$segments[0] = config('app.fallback_locale');
            $newUrl = implode('/', $segments);
            if (array_key_exists('QUERY_STRING', $_SERVER) && !empty($_SERVER['QUERY_STRING']))
                $newUrl .= '?'.$_SERVER['QUERY_STRING'];

            return $this->redirector->to($newUrl);
        }

        app()->setLocale($locale);
        // setLocale(LC_TIME, $locale);
        if($locale=="fr")
            setlocale(LC_ALL, "fr_CA.utf8");
        if($locale=="en")
            setlocale(LC_ALL, "en_CA.utf8");
        Carbon::setLocale($locale);

        return $next($request);
    }
}
