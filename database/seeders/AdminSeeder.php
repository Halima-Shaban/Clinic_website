<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create(
            [
                'name' => env('ADMIN_NAME', 'Admin'),
                'email' => env('ADMIN_ACCOUNT'),
                'password' =>bcrypt( env('ADMIN_PASSWORD','password')),

            ]
        );
    }
}
