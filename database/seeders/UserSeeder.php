<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@keuangan.test'],
            ['name' => 'Administrator', 'password' => 'password123', 'role' => 'admin']
        );

        User::updateOrCreate(
            ['email' => 'mahasiswa@keuangan.test'],
            ['name' => 'Mahasiswa Uji', 'password' => 'password123', 'role' => 'mahasiswa']
        );
    }
}