<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class loginregister
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
        $routename = Route::currentRouteName();

        if(Auth::user())
        {
            if(Auth::user()->user_type ==  'Vendor')
            {
                return redirect()->route('showvendoroverview');
            }
            else if(Auth::user()->user_type == 'Couple')
            {
                return redirect()->route('showcoupleeditprofile');
            }
            elseif(Auth::user()->user_type == 'Admin')
            {
                return redirect()->route('showadmindashnoard');
            }
        }
        else{
            return $next($request);
        }
        // if(Str::contains($routename, 'couple'))
        // {
        //     if(Auth::user() == null)
        //     {
        //         return $next($request);

        //     }
        //     else{
        //         return redirect()->route('showcoupleeditprofile');

        //     }
        // }
        // else if(Str::contains($routename, 'vendor'))
        // {
        //     if(Auth::user() == null)
        //     {
               
        //         return $next($request);
        //     }
        //     else{
        //         return redirect()->route('showvendoroverview');
        //     }

        // }
        // else if(Str::contains($routename, 'admin'))
        // {
        //     if(Auth::user() == null)
        //     {
               
        //         return $next($request);
        //     }
        //     else{
        //         return redirect()->route('showadmindashnoard');
        //     }

        // }
        // else{
        //     return $next($request);
        // }
        // else if(Str::contains($routename, 'Admin'))
        // {
        //     if(Auth::user() == null)
        //     {
        //         return redirect()->route('vendorlogin');
        //     }
        //     else{
        //         return $next($request);
        //     }

        // }
        
    }
}
