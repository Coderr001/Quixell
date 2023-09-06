@extends('layouts.default')

@section('content')
<div class="container">
    <h1 class="mt-3">Collections</h1>
    <div class="row">
        @foreach ($collections as $collection)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $collection['image'] }}" class="card-img-top" alt="{{ $collection['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $collection['title'] }}</h5>
                    <p class="card-text">{{ $collection['description'] }}</p>
                    <p class="card-text"><strong>Harga: {{ $collection['price'] }}</strong></p>
                    <a href="{{ route('collections.show', ['id' => $collection['id']]) }}" class="btn btn-primary">Lihat Detail</a>


                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop




