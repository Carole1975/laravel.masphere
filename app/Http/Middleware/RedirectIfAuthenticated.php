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
        if (Auth::guard($guard)->check()) {
        // if (Auth::guard($guard)->check() && Auth::User()->profile == '1') {
            // return redirect('/family');
            if (Auth::User()->profile=='1') {
                return Redirect()->route('family');
            } else {
                return Redirect()->route('pro');
            }
        }


        // protected function authenticated(Request $request, $user)
        // {
        //     if (Auth::User()->profile=='1') {
        //         return Redirect()->route('family');
        //     } else {
        //         return Redirect()->route('pro');
        //     }
        // }


        return $next($request);
    }
}
