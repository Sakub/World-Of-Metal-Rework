<?php

namespace Database\Seeders;

use App\Models\Band;
use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Band::create([
            'name' => 'Vader',
            'description' => 'Vader is a Polish death metal band from Olsztyn. Formed in 1983, the group was founded by then-bassist Piotr "Peter" Wiwczarek and guitarist Zbigniew "Vika" Wróblewski. Vader went through several lineup changes over the years, with Wiwczarek as the only constant member. Since 2011, the band has comprised Wiwczarek on guitars and vocals, guitarist Marek "Spider" Pająk, bassist Tomasz "Hal" Halicki, and British drummer James Stewart.',
            'image_url' => '/img/vaderBand.jpg',
            'logo_url' => '',
            'created_year' => 1983,
            'albums_released' => 10,
            "members_number" => 5,
            'nationality_id' => 1,
            'user_posted' => 1,
            'genre_id' => 1,
            'rating' => 5
        ]);
    }
}
