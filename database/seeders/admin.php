<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@kostfinder.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'created_at' => now()
            ],
            [
                'nama' => 'Pemilik',
                'email' => 'pemilik@kostfinder.com',
                'password' => Hash::make('123'),
                'role' => 'pemilik',
                'created_at' => now()
            ],
            [
                'nama' => 'Pencari',
                'email' => 'pencari@kostfinder.com',
                'password' => Hash::make('123'),
                'role' => 'pencari',
                'created_at' => now()
            ]
        ]);

    }
}
