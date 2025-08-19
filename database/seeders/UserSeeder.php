<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => env('CLIENT_NAME'),
                'email' => env('CLIENT_ACCOUNT'),
                'password' =>Hash::make(env('CLIENT_PASSWORD')),

            ]
        );
    }
}
