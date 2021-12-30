<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check()) {
            if(str_contains($request->url(),'/forgot-password') || str_contains($request->url(),'/reset-password'))
            {
                
                return redirect('/');
            }

            if(!str_contains($request->url(),'/logout') && !str_contains($request->url(),'/livewire'))
            {

                if(Auth::user()->hasRole('admin')) {
                   
                    if(!str_contains($request->url(),'/admin')) {

                        return redirect('/admin');
                    }

                }
                if(Auth::user()->hasRole('customer')) {
                    if(str_contains($request->url(),'/admin')) {
                        return redirect('/');
                    }

                }


              
            }

        } 

       
        return $next($request);
    }
}
