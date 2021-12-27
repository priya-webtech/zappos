<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create([
            'uuid' => '1000001',
            'first_name' => 'Priya',
            'last_name' => 'Admin',
            'mobile_number' => '8511344767',
            'email' => 'piya831996@gmail.com',
            'password' => Hash::make('Priya@96'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
