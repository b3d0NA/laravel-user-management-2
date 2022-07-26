<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'dealer_code' => '',
                'endpoint' => '',
                'next_schedule' => '',
            ],
        ];

        User::insert($users);
    }
}