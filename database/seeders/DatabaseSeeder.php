<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Akun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('akun')->insert([
            [
                'email' => 'email@gmail.com',
                'password' => 'password',
            ],
            [
                'email' => 'email2@gmail.com',
                'password' => 'password',
            ],
            [
                'email' => 'email3@gmail.com',
                'password' => 'password',
            ],
            [
                'email' => 'email4@gmail.com',
                'password' => 'password',
            ],
        ]);
    }
}
