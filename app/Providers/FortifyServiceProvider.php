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

use App\Models\User;

use Illuminate\Support\Facades\Session;





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

            Session::put('screen', 'login');

            $user = User::where('email', $request->email)->first();

            $role = $this->getRoleFromEmail($user);

            $verified = $this->isVerified($user);



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



            if($user && empty($user->email_verified_at)) {

                session()->flash('not_varify', 'Your account is not verified. Please Verify your account.');

              //  $user->sendEmailVerificationNotification();

                return redirect()->back()->with('error_code', 5);

            }



            return Limit::perMinute(5)->by($request->email.$request->ip());

        });



        RateLimiter::for('two-factor', function (Request $request) {

            return Limit::perMinute(5)->by($request->session()->get('login.id'));

        });

    }



    public function getRoleFromEmail($user) {



        if($user && isset($user->roles)) {

            if($user->hasRole('admin')) {

                return 'admin';

            } else {

                return 'customer';

            }

        }

        return '';

    }



    public function isVerified($user)

    {

        if(empty($user->email_verified_at)) {

            return false;

        } else {

            return true;

        }

        

    }

}

