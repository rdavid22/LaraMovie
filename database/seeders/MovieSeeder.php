<?php

namespace Database\Seeders;

use App\Models\Movie;
use Database\Factories\MovieFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::factory(100)->create(
            [
                'cover' => 'https://www.cinemacity.hu/xmedia-cw/repo/feats/posters/5544O2R1-md.jpg',
                'cover_big' => 'https://www.cinemacity.hu/xmedia-cw/repo/feats/posters/5544O2R1-lg.jpg',
                'trailer' => 'https://www.youtube-nocookie.com/embed/_qAJMXfL6o0',
            ]
        );
    }
}
