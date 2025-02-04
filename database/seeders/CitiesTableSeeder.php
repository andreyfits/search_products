<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['Krakow', 'Warsaw', 'Gdansk', 'Poznan', 'Wroclaw', 'Katowice', 'Lodz', 'Gdynia', 'Szczecin', 'Bydgoszcz'];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
