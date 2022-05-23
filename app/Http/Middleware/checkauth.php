<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class checkauth

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            
            
            $routename = Route::currentRouteName();
            
            if(Str::contains($routename, 'vendor'))
            {
                if(Auth::user()->user_type == "Vendor")
                {
                    return $next($request);
                }
                else
                {
                    return redirect()->route('showauthvendor');
                }
            }
            elseif(Str::contains($routename, 'couple'))
            {
               
                
                if(Auth::user()->user_type == "Couple")
                {
                    return $next($request);
                }
                else
                {
                    return redirect()->route('showauthcouple');
                }
            }
            elseif(Str::contains($routename, 'admin'))
            {
                if(Auth::user()->user_type == "Admin")
                {
                    return $next($request);
                }
                else
                {
                    return redirect()->route('showauthadmin');
                }
            }
        }
        else
        {
            return redirect('/');
        }
    }
}
