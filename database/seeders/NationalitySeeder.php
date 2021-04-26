<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $API_URL = 'https://restcountries.eu/rest/v2/all?fields=name;';

        $apiResponse = Http::withOptions(['verify' => false])->get($API_URL);
        $result = $apiResponse->json();

        foreach($result as $country) {
             Nationality::create([
                'name' => $country["name"] 
            ]);
        }; 
    }
}
