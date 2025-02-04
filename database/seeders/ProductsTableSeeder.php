<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            Product::create([
                'sku'     => random_int(100, 999),
                'city_id' => random_int(1, 10),
            ]);
        }
    }
}
