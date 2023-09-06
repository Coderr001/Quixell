@extends('layouts.default')

@section('content')
<div class="container">
    <h1 class="mt-3">Detail Koleksi</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset($collection['image']) }}" class="card-img-top" alt="{{ $collection['title'] }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $collection['title'] }}</h5>
                    <p class="card-text">{{ $collection['description'] }}</p>
                    <p class="card-text"><strong>Harga: {{ $collection['price'] }}</strong></p>

                    <form action="/cart/add/{{$collection['id']}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="quantity">Jumlah Order</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
                        </div>

                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

