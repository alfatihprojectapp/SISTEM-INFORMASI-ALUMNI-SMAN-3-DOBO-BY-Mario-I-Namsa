<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // admin
        \App\Models\User::create([
            'nama' => 'Admin Sekolah',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            // 'remember_token' => Str::random(10),
            'admin' => 1
        ]);
    }
}
