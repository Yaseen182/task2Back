<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['name' => 'Laptop', 'price' => 3500.00]);
        Product::create(['name' => 'Headphones', 'price' => 150.75]);
        Product::create(['name' => 'Smartphone', 'price' => 2500.50]);
    }
}
