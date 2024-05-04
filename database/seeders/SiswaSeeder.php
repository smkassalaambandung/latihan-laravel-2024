<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert(
            [
                'nama' => 'Agung Wahyudi',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl. cibay'
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Wahyudi',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl. cibay'
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Agung',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl. cibay'
            ]
        );
        Siswa::insert(
            [
                'nama' => 'XXXX',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl. cibay'
            ]
        );
    }
}
