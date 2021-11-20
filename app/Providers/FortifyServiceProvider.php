<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Http\Responses\LoginResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Http\Responses\LogoutResponse;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;
use App\Http\Responses\RegisterResponse;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
use App\Models\User;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            LoginResponseContract::class,
            LoginResponse::class,
        );
        $this->app->bind(
            LogoutResponseContract::class,
            LogoutResponse::class,
        );
        $this->app->bind(
            RegisterResponseContract::class,
            RegisterResponse::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $role = $this->getRoleFromEmail($request->email);

            if(!empty($role)) {
                if($request->login_from == 'frontend' && $role == 'admin') {
                    session()->flash('alert', 'You can not login here');
                    return redirect()->back();
                } 

                if($request->login_from == 'backend' && $role == 'customer') {
                    session()->flash('alert', 'You can not login here');
                    return redirect()->back();
                }
            }

            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }

    public function getRoleFromEmail($email) {
        $user = User::where('email', $email)->first();

        if($user && isset($user->roles)) {
            if($user->hasRole('admin')) {
                return 'admin';
            } else {
                return 'customer';
            }
        }
        return '';
    }
}
