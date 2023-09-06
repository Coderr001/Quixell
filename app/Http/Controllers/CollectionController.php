<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class CollectionController extends Controller
{
    public function index()
    {
        
        // Get all collection items from the database
        $collections = Product::all();

        return view('pages.collection', compact('collections'));
    }

    public function getById($id)
    {
        // Get the collection item from the database
        $collection = Product::find($id);
        // return response()->json($collection);
        return view('pages.collection-detail', ['collection' => $collection, 'id' => $id]);
    }
    
    
    
}
