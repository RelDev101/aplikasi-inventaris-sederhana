<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Product 1",
            "description" => "Desc Prod 1",
            "sku" => "111",
            "price" => 10000,
            "stock" => 100,
            "category_id" => 1,
        ]);
    }
}
