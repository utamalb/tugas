<?php

namespace Database\Seeders;

use App\Models\MMovies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MMovies::factory()
            ->count(5)
            ->create();
    }
}
