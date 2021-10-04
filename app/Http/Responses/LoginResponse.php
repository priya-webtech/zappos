<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    /**
     * @inheritDoc
     */
    public function toResponse($request)
    {
        $user = Auth::user();

        if (isset($user->roles) && $user->hasRole('admin')) {
            return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->intended(config('fortify.admin')); // This is the line you want to modify so the application behaves the way you want.

        }
        if (isset($user->roles) && $user->hasRole('customer')) {

            return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->intended(config('fortify.home')); // This is the line you want to modify so the application behaves the way you want.

        }
    }
}
