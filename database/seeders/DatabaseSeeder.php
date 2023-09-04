<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seed product table with 10 products
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of Product 1',
                'price' => '19.99',
                'image' => 'product1.jpg',
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of Product 2',
                'price' => '29.99',
                'image' => 'product2.jpg',
            ],
            // Add more product data as needed
        ];

        // Insert the data into the 'products' table
        foreach ($products as $productData) {
            Product::create($productData);
        }

    }
}
