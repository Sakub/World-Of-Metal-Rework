<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listOfGenres = [
            'Death metal',
            'Trash metal',
            'Black metal',
            'Power metal',
            'Speed metal',
            'Heavy metal',
            'Nu metal',
            'Deathcore',
            'Metalcore',
            'Grindcore',
            'Blackened death metal',
        ];

        foreach($listOfGenres as $genre) {
            Genre::create([
                'name' => $genre
            ]);
        }
        
    }
}
