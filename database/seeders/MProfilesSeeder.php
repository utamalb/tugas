<?php

namespace Database\Seeders;

use App\Models\MProfiles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MProfiles::factory()
            ->count(5)
            ->create();
    }
}
