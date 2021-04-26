<?php

namespace Database\Seeders;

use App\Models\Band;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NationalitySeeder::class);
        $this->call(GenreSeeder::class);
        Band::factory(10)->create();
        $this->call(BandSeeder::class);
    }
}
