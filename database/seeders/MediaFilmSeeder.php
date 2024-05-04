<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/watch?v=FkASrE05VY4'
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'belajar Rust',
            'url_media' => 'https://www.youtube.com/watch?v=FkASrE05VY4'
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'RED SPARK',
            'url_media' => 'https://akcdn.detik.net.id/visual/2024/03/08/gs-caltex-vs-red-sparks-7_169.jpeg?w=400&q=90'
        ]);
    }
}
