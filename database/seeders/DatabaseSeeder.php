<?php

namespace Database\Seeders;

use App\Models\Band;
use App\Models\Album;
use App\Models\Role;
use App\Models\Track;
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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(GenreSeeder::class);
        Band::factory(20)->create();
        Album::factory(30)->create();
        $this->call(BandSeeder::class);
        Track::factory(10)->create();
    }
}
