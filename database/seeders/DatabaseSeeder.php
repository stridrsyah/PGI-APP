<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed akun Owner dan Admin pertama.
     *
     * Jalankan: php artisan db:seed
     */
    public function run(): void
    {
        // ── OWNER ─────────────────────────────────────────────────
        User::updateOrCreate(
            ['email' => 'owner@pgi.com'],
            [
                'name'      => 'Owner PGI',
                'role'      => 'owner',
                'password'  => Hash::make('owner123'),
                'is_aktif'  => true,
            ]
        );

        // ── ADMIN ──────────────────────────────────────────────────
        User::updateOrCreate(
            ['email' => 'admin@pgi.com'],
            [
                'name'      => 'Admin PGI',
                'role'      => 'admin',
                'password'  => Hash::make('admin123'),
                'is_aktif'  => true,
            ]
        );
    }
}
