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

use App\Models\CustomerComment;

use App\Actions\Fortify\PasswordValidationRules;

use Illuminate\Auth\Events\PasswordReset;

use Illuminate\Auth\Passwords\DatabaseTokenRepository;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;















class Login extends Component 

{

    use PasswordValidationRules;











    public function render()

    {

        $this->tokens = new TokenRepositoryInterface();



        return view('livewire.front.auth.login');

    }



    public function forgotPassword()

    {

    	return view('livewire.front.auth.forgot-password');

    }





    public function sendPasswordResetLink(Request $request)

    {
        date_default_timezone_set("Europe/Amsterdam");

        session()->flash('screen', 'forgot-password');



        $request->validate(['email' => ['required']]);

        $user = DB::table('users')->where('email', $request->email)->first();

        //Check if the user exists

        if (empty($user)) {



            return redirect()->back()->withErrors(['email' => trans('User not found!')]);

        }



       session()->forget('screen');



       $token  = Str::random(40);



        //Create Password Reset Token

        DB::table('password_resets')->insert([

            'email' => $request->email,

            'token' => $token,

            'created_at' => Carbon::now()

        ]);

        //Get the token just created above

        $tokenData = DB::table('password_resets')

            ->where('email', $request->email)->orderBy('created_at','desc')->first();



        if ($this->sendResetEmail($request->email, $token)) {



            $Comment_arr = [

                    'user_id' => $user->id,
                    
                    'message' => 'User Requested Password reset',
                ];


            CustomerComment::create($Comment_arr);

            return redirect()->back()->with('status', trans('A Reset link has been sent to your Email address.'));

            

        } else {

            $Comment_arr = [

                    'user_id' => $user->id,
                    
                    'message' => 'A Network Error occurred. Please try again',
                ];


            CustomerComment::create($Comment_arr);

            return redirect()->back()->withErrors(['network_error' => trans('A Network Error occurred. Please try again.')]);

        }



       

    }



    private function sendResetEmail($email, $token)

    {

        date_default_timezone_set("Europe/Amsterdam");

        //Retrieve the user from the database

        $user = User::where('email', $email)->first();

        // $user = DB::table('users')->where('email', $email)->select('first_name', 'email')->first();

        //Generate, the password reset link. The token generated is embedded in the link

        $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);



        try {



            $user->notify(new ResetPassword($token));

            $Comment_arr = [

                    'user_id' => $user->id,
                    
                    'message' => 'Send Reset Email Link',
                ];


                CustomerComment::create($Comment_arr);

            return true;

        } catch (\Exception $e) {

            return false;

        }

    }  



    public function resetPassword() 

    {

        return view('livewire.front.auth.reset-password');

    }       



    public function storeNewPassword(Request $request)

    {

        date_default_timezone_set("Europe/Amsterdam");

         $request->validate([

            'token' => 'required',

            'email' => 'required|email',

            'password' =>  $this->passwordRules(),

        ]);



        $user = User::where('email', $request->email)->first();



        if(empty($user)) {

           return redirect()->back()->with('error', trans('Email not exist!'));

        }



         $token = DB::table('password_resets')->where('email', $request->email)->where('token', $request->token)->first();



         $user->forceFill([

            'password' => Hash::make($request->password),

        ])->save();



        $user->setRememberToken(Str::random(60));



        $user->save();

        DB::table('password_resets')->where('email', $request->email)->where('token', $request->token)->delete();



        event(new PasswordReset($user));

        $Comment_arr = [

                    'user_id' => $user->id,
                    
                    'message' => 'Your password has been reset',
                ];


        CustomerComment::create($Comment_arr);

        return redirect('/')->with('success', 'Your password has been reset!');

        


    }                                      

}



