<?php

namespace Database\Seeders;

use App\Models\MCasts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MCastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MCasts::factory()
            ->count(5)
            ->create();
    }
}
