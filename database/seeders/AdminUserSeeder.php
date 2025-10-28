<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creates a user for testing purposes. Password is hashed.
        User::updateOrCreate([
            'email' => 'admin@tatuigames.com',
        ], [
            'name' => 'Admin Tatuigames',
            'email' => 'admin@tatuigames.com',
            'password' => Hash::make('3N2xq4mkG'),
        ]);
    }
}
