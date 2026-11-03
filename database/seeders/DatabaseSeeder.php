<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            ['email' => 'dosen@gmail.com'],
            [
                'name' => 'Pak Budi Budiman',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'nomor_induk' => '19800101',
            ],
        );
 
        User::updateOrCreate(
            ['email' => 'mahasiswa@gmail.com'],
            [
                'name' => 'Muhammad Keyza Al Khalifi',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500081',
            ],
        );
    }
}
