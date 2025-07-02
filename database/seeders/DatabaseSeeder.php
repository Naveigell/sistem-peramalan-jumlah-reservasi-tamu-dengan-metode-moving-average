<?php

namespace Database\Seeders;

use App\Models\Reservation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Reservation::factory(200)->create();

        $this->call(UserSeeder::class);
    }
}
