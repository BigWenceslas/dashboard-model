<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class RoleRedirection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()){
            return redirect('/');}
        $user = Auth::user();
        if($user->role_id == 3){
            return redirect('/dashboard/etudiant');
        }
        elseif($user->role_id == 4){
            return redirect('/dashboard/entreprise');
        }
        elseif($user->role_id == 5){
            return redirect('/dashboard/freelance');
        }
        elseif($user->role_id == 6){
            return redirect('/dashboard/startup');
        }
        elseif($user->role_id == 7){
            return redirect('/admin');
        }
        //return $next($request);
    }
}
