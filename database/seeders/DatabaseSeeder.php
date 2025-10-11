<?php

namespace Database\Seeders;

// Pastikan import ini ada
use Database\Seeders\SambutanSeeder; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JurusanSeeder::class);

    }
}
