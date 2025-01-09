<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MCastMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = DB::table('m_movies')->pluck('id');
        $casts = DB::table('m_casts')->pluck('id');

        foreach (range(1, 5) as $index) {
            DB::table('m_cast_movies')->insert([
                'id' => Str::uuid(),
                'movie_id' => $movies->random(),
                'cast_id' => $casts->random(),
            ]);
        }
    }
}
