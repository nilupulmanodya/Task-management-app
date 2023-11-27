<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'admin_user',
            'email' => 'admin@example.com',
            'password' => Hash::make('00000000'),
            'user_type' => 1,
        ];

        // Create a new user
        User::create($user);
    }
}
