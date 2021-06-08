<?php

namespace Database\Factories;

use App\Models\Track;
use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomAlbumId = rand(1, Album::getAlbumsLength());
        $randomRate = rand(0, 5);
        $randomLength = rand(120, 350);

        return [
            'name' => $this->faker->sentence(2),
            'lyrics' => $this->faker->realText(),
            'length' => $randomLength,
            'rating' => $randomRate,
            'album_id' => $randomAlbumId
        ];
    }
}
