<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem; // Import your CartItem model here

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all(); // Assuming you have a CartItem model

        $totalPrice = 0; // Calculate the total price here

        return view('pages.cart', compact('cartItems', 'totalPrice'));
    }

    public function addToCart(Request $request, $itemId)
    {
        $quantity = $request->input('quantity');

        // Add logic to add the item with $itemId and $quantity to the cart here

        return redirect()->route('collections.show', ['id' => $itemId])->with('success', 'Item added to cart.');
    }

    public function removeFromCart($id)
    {
        // Add logic to remove the item with $id from the cart here

        return redirect()->route('cart')->with('success', 'Item removed from cart.');
    }

    public function checkout()
    {
    

        return view('pages.checkout');
    }
    public function store(Request $request)
    {
        // Logic to add items to the cart goes here

        // Example: You can retrieve the item ID and quantity from the request
        $itemId = $request->input('itemId');
        $quantity = $request->input('quantity');

        // Then, you can add the item to the cart or perform any other necessary actions

        // After adding the item, you might want to redirect back to the collection page or show a success message
        return redirect()->route('collections.index')->with('success', 'Item added to cart successfully');
    }
}
    


