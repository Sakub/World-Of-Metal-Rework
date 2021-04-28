<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomRate = rand(0, 5);
        $randomBandId = rand(1, Band::getBandsLength());
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(15),
            'image_url' => $this->faker->imageUrl,
            'release_year' => $this->faker->year,
            'band_id' => $randomBandId,
            'rating' => $randomRate
        ];
    }
}
