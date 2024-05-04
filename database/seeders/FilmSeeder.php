<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::insert([
            'judul' => 'Jumanji',
            'deskripsi' => 'lorem ipmsum.....'
        ]);

        Film::insert([
            'judul' => 'Jumanji 2',
            'deskripsi' => 'lorem ipmsum.....'
        ]);

        Film::insert([
            'judul' => 'Devils Swan',
            'deskripsi' => 'lorem ipmsum.....'
        ]);
    }
}
