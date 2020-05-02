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
                'password'       => '$2y$10$pU7307aPavq5PWScjirWfuI7ZGp/VuVVrluVpJrsicHXTWunfgYnO',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
