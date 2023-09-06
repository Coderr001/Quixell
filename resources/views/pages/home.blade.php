@extends('layouts.default')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12">
            <div class="image-container" style="background-image: url('{{ asset('images/wellcome.jpg') }}');">
                <!-- Tambahkan gaya CSS untuk mengatur tinggi dan posisi teks -->
                <div class="image-text">
                    <h1>Welcome to Quixell</h1>
                    <p class="lead">Discover the latest fashion trends.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan gaya CSS untuk mengatur gambar -->
<style>
    .image-container {
        background-size: cover;
        background-position: center;
        min-height: calc(100vh - 70px); /* Mengurangi tinggi header dari tinggi tampilan penuh */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .image-text {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
    }
</style>
@stop
