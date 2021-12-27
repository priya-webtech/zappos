<?php


namespace App\Http\Responses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;



class LogoutResponse implements LogoutResponseContract
{
    /**
     * @inheritDoc
     */
    public function toResponse($request)
    {
        if ($request->input('role') == "admin") {
            $request->input('role') == "";
            return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->intended('/login'); // This is the line you want to modify so the application behaves the way you want.

        }
        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home')); // This is the line you want to modify so the application behaves the way you want.
    }
}
