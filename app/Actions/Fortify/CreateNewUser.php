<?php



namespace App\Actions\Fortify;



use App\Models\User;

use App\Models\CustomerComment;

use App\Models\CustomerDetail;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;

use Laravel\Fortify\Contracts\CreatesNewUsers;

use Laravel\Jetstream\Jetstream;



class CreateNewUser implements CreatesNewUsers

{

    use PasswordValidationRules;





    /**

     * Validate and create a newly registered user.

     *

     * @param  array  $input

     * @return \App\Models\User

     */

    public function create(array $input)

    {

        date_default_timezone_set("Europe/Amsterdam");
        
        Session::put('screen', 'register');

         $validator = Validator::make($input, [

            'first_name' => ['required', 'string', 'max:255'],

            'last_name' => ['required', 'string', 'max:255'],

            'email' => ['required','regex:/(.+)@(.+)\.(.+)/i', 'string', 'email', 'max:255', 'unique:users'],

            'password' => $this->passwordRules(),

        ])->validate();

         

        $user = User::create([

                'first_name' => $input['first_name'],

                'last_name' => $input['last_name'],

                'email' => $input['email'],

                'password' => Hash::make($input['password']),

            ]);

            CustomerDetail::create([
                'user_id' => $user->id,
            ]);


            $user->assignRole('customer');
            $Comment_arr1 = [

                    'user_id' => $user->id,
                    
                    'message' => 'Customer was created.',
                ];


            CustomerComment::create($Comment_arr1);
            $Comment_arr2 = [

                    'user_id' => $user->id,
                    
                    'message' => 'verification Meessage Send.',
                ];


            CustomerComment::create($Comment_arr2);
            session()->flash('success', 'Email verification mail is sent');

          // $user->sendEmailVerificationNotification();



            return $user;



      







    }

}

