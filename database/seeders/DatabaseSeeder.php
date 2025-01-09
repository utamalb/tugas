<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MGenresSeeder::class);
        $this->call(MRolesSeeder::class);
        $this->call(MCastsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(MProfilesSeeder::class);
        $this->call(MMoviesSeeder::class);
        $this->call(MCastMoviesSeeder::class);
        $this->call(class: MReviewsSeeder::class);
    }
}
