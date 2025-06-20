<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Kost extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kosts')->insert([
            [
                'nama' => 'Kost Putri Mawar',
                'deskripsi' => 'Kost nyaman dan bersih khusus putri',
                'harga_per_bulan' => 800000,
                'jenis' => 'putri',
                'no_telepon' => '081234567890',
                'id_pemilik' => 1,
                'created_at' => now()
            ],
            [
                'nama' => 'Kost Putra Melati',
                'deskripsi' => 'Kost strategis dekat kampus',
                'harga_per_bulan' => 750000,
                'jenis' => 'putra',
                'no_telepon' => '085123456789',
                'id_pemilik' => 1,
                'created_at' => now()
            ]
        ]);
    }
}
