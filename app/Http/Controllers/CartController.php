<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request){
        $cart = Cart::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity ?? 1
        ]);
        return response()->json([
            'message' => 'Product added to cart successfully',
            'cart' => $cart,
        ], 201);
    }

    public function getByUser(){
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        return response()->json([
            'cart' => $cart
        ], 200);
    }

    public function checkOut(){
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        foreach($cart as $item){
            $item->delete();
        }
        return response()->json([
            'message' => 'Checkout successful'
        ], 200);
    }

}
