<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Test',
                'email' => "test.bd@gmail.com",
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
