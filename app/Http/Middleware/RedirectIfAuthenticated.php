<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        
        if ($guard === 'employer' && Auth::guard($guard)->check()) {
            return redirect('/employer/home');
        }

      
            if (Auth::guard($guard)->check()) {
                if ($request->path() == "/user/profile"){
                    return redirect('/user/profile');
                }
                else{
                    return redirect('/user/home');
                }
              
            }
        

        
        
        

        return $next($request);
    }
}
