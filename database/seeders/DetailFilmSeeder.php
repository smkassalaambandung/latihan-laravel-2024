<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt2788316',
            'url_imdb' => 'https://www.imdb.com/title/tt2788316/?ref_=hm_fanfav_tt_i_3_pd_fp1_r',
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt17279496',
            'url_imdb' => 'https://www.imdb.com/title/tt17279496/?ref_=hm_fanfav_tt_i_5_pd_fp1_r',
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt17279498',
            'url_imdb' => 'https://www.imdb.com/title/tt17279498/?ref_=hm_fanfav_tt_i_5_pd_fp1_r',
        ]);
    }
}
