<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'a@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'b@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'c@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'d@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'e@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'f@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'g@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'h@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'i@gmail.com', 'password'=>'11111'],
            ['first_name' => 'a', 'last_name' => 'a', 'mobile_number'=>'111111', 'email'=>'j@gmail.com', 'password'=>'11111'],
        ]);
    }
}
