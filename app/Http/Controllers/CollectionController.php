<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    private $collections;

    public function __construct()
    {
        $this->collections = [
            [
                'id' => 1,
                'title' => 'Koleksi 1',
                'description' => 'Deskripsi koleksi 1.',
                'price' => '799.000 IDR',
                'image' => asset('images/collection1.jpg'),
            ],
            [
                'id' => 2,
                'title' => 'Koleksi 2',
                'description' => 'Deskripsi koleksi 2.',
                'price' => '799.000 IDR',
                'image' => asset('images/collection2.jpg'),
            ],
            [
                'id' => 3,
                'title' => 'Koleksi 3',
                'description' => 'Deskripsi koleksi 3.',
                'price' => '799.000 IDR',
                'image' => asset('images/collection3.jpg'),
            ],
             [
                'id' => 4,
                'title' => 'Koleksi 4',
                'description' => 'Deskripsi koleksi 4.',
                'price' => '999.000 IDR',
                'image' => asset('images/collection4.jpg'),
            
            ],
        ];
    }

    public function index()
    {
        // Anda bisa menyiapkan data koleksi di sini jika diperlukan
        $collections = [
            [
                'id' => 3,
                'title' => 'Koleksi 1',
                'description' => 'Deskripsi koleksi 1.',
                'price' => '799.000 IDR',
                'image' => asset('images/collection1.jpg'),
            ],
            [
                'id' => 2,
                'title' => 'Koleksi 2',
                'description' => 'Deskripsi koleksi 2.',
                'price' => '799.000 IDR',
                'image' => asset('images/collection2.jpg'),
            ],
            [
                'id' => 3,
                'title' => 'Koleksi 3',
                'description' => 'Deskripsi koleksi 3.',
                'price' => '799.000 IDR',
                'image' => asset('images/collection3.jpg'),
            
            ],
            [
                'id' => 4,
                'title' => 'Koleksi 4',
                'description' => 'Deskripsi koleksi 4.',
                'price' => '999.000 IDR',
                'image' => asset('images/collection4.jpg'),
            
            ],
        ];

        // Kemudian, Anda harus mengembalikan tampilan dengan data tersebut
        return view('pages.collection', compact('collections'));
    }

    public function show($id)
    {
        // Find the collection item by ID
        $collection = $this->collections[$id - 1]; // Assuming IDs are sequential
    
        // Check if the collection item exists
        if ($collection) {
            return view('pages.collection-detail', compact('collection'));
        } else {
            // Handle the case where the collection item is not found (e.g., show an error)
            abort(404); // You can change this to an appropriate error response
        }
    }

    public function detailByIndex($id)
    {
        // Find the collection item by ID
        $collection = $this->collections[$id - 1]; // Assuming IDs are sequential
    
        // Check if the collection item exists
        if ($collection) {
            return view('pages.collection-detail', compact('collection'));
        } else {
            // Handle the case where the collection item is not found (e.g., show an error)
            abort(404); // You can change this to an appropriate error response
        }
    }
    
    
    
}
