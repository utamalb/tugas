<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_genres')->insert([
            [
                'id' => '1',
                'name' => 'Action',
                'created_at' => now(),

            ],
            [
                'id' => '2',
                'name' => 'Crime',
                'created_at' => now(),
            ],
            [
                'id' => '3',
                'name' => 'Drama',
                'created_at' => now(),
            ],
            [
                'id' => '4',
                'name' => 'Fantasy',
                'created_at' => now(),
            ],
            [
                'id' => '5',
                'name' => 'Comedy',
                'created_at' => now(),
            ],
        ]);
    }
}
