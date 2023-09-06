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
                'id' => 1,
                'name' => 'Koleksi 1',
                'description' => 'Deskripsi koleksi 1.',
                'price' => '799.000 IDR',
                'image' => 'images/collection1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Koleksi 2',
                'description' => 'Deskripsi koleksi 2.',
                'price' => '799.000 IDR',
                'image' => 'images/collection2.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Koleksi 3',
                'description' => 'Deskripsi koleksi 3.',
                'price' => '799.000 IDR',
                'image' => 'images/collection3.jpg'
            ],
             [
                'id' => 4,
                'name' => 'Koleksi 4',
                'description' => 'Deskripsi koleksi 4.',
                'price' => '999.000 IDR',
                'image' => 'collection4.jpg'
            
            ],
        ];


        // Insert the data into the 'products' table
        foreach ($products as $productData) {
            Product::create($productData);
        }

    }
}
