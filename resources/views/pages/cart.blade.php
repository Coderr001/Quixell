@extends('layouts.default')

@section('content')
<div class="container">
    <h1 class="mt-3">Shopping Cart</h1>
    @if(count($cartItems) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cartItem)
                    <tr>
                        <td>{{ $cartItem->product->name }}</td>
                        <td>{{ $cartItem->quantity }}</td>
                        <td>{{ $cartItem->product->price }} IDR</td>
                        <td>{{ $cartItem->quantity * $cartItem->product->price }} IDR</td>
                        <td>
                            <a href="{{ route('removeFromCart', $cartItem->id) }}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
                <form action="{{ route('addToCart', ['itemId' => $collection['id']]) }}" method="get">
                    @csrf
                    <div class="form-group">
                        <label for="quantity">Jumlah Order</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
                    </div>

                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>

            </tbody>
        </table>
        <div class="text-right">
            <p><strong>Total: {{ $totalPrice }} IDR</strong></p>
            <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
        </div>
    @else
        <p>Your shopping cart is empty.</p>
    @endif
</div>
@stop
