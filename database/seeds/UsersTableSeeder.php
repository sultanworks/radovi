<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$U4ZwpXYdtg/Xrp2rdJWJZu5Kkt2L4SksYQY9xIBs0.IuM2zfZ1Tcu',
                'remember_token' => null,
                'approved'       => 1,
            ],
        ];

        User::insert($users);
    }
}
