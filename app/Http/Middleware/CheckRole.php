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
                if(str_contains($request->url(),'/admin') && !Auth::user()->hasRole('admin')) {
                    return redirect('/admin');
                }
                if(!str_contains($request->url(),'/admin') && !Auth::user()->hasRole('customer')) {
                    return redirect('/');
                }
            }

        } 

       
        return $next($request);
    }
}
