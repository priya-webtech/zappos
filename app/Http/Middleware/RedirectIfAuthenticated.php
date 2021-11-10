<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
                if (Auth::guard($guard)->check()) {
                    $user = Auth::user();

                    if (Str::startsWith($request->route()->uri, 'admin') && isset($user->roles) && $user->hasRole('customer')) {
                        return redirect(RouteServiceProvider::HOME);
                    }

                }

        }

        return $next($request);
    }
}
