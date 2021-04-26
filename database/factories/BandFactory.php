<?php

namespace Database\Factories;

use App\Models\Band;
use App\Models\Genre;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

class BandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Band::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $randomRate = rand(0, 5);
        $randomGenreId = rand(1, Genre::getGenresLength());
        $randomNationalityId = rand(1, Nationality::getNationalitiesLength());

        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(15),
            'logo_url' => ' ',
            'image_url' => $this->faker->imageUrl,
            'created_year' => $this->faker->year,
            'members_number' => $this->faker->randomDigit,
            'nationality_id' => $randomNationalityId,
            'user_posted' => 1,
            'genre_id' => $randomGenreId,
            'albums_released' => $this->faker->randomDigit,
            'rating' => $randomRate
        ];
    }
}
