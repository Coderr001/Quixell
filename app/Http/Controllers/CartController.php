<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Import your CartItem model here

class CartController extends Controller
{
    public function store(Request $request){
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $request->id;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->route('cart');
    }

    public function getByUser(){
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('cart.index', ['cart' => $cart]);
    }

    public function index(){
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        // get the total price of all items in the cart
        $total = 0;
        foreach($cart as $item){
            $total += $item->product->price * $item->quantity;
        }

        

        return view('pages.cart', ['cartItems' => $cart, 'total' => $total]);
    }

    public function destroy($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->route('cart');
    }

    public function checkout(){
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        // get the total price of all items in the cart
        // delete all items in the cart
        foreach($cart as $item){
            $item->delete();
        }
        return redirect()->route('cart');
    }
}
    


