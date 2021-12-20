<?php

namespace App\Http\Livewire\Front\Auth;

use Livewire\Component;
use Laravel\Fortify\Fortify;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Laravel\Fortify\Contracts\FailedPasswordResetLinkRequestResponse;
use Illuminate\Contracts\Auth\PasswordBroker;
use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse;
use Laravel\Fortify\Contracts\ResetPasswordViewResponse;
use App\Notifications\ResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Passwords\DatabaseTokenRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;







class Reverification extends Component 
{

    
    public function Resendmail(Request $request)
    {
        dd($request->email);
         $user = User::where('email', $request->email)->first();
        $user->sendEmailVerificationNotification();

          return redirect()->back();

    }                                      
}

