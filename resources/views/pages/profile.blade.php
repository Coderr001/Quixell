{{-- resources/views/pages/profile.blade.php --}}
@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/user-avatar.jpg') }}" alt="User Avatar" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                                <p>Email: {{ $user->email }}</p>
                                <p>Gender: {{ $user->gender }}</p>
                                <p>Alamat: {{ $user->alamat }}</p> <!-- Contoh informasi tambahan -->
                                <p>Nomor Telepon: {{ $user->nomor_telepon }}</p> <!-- Contoh informasi tambahan -->
                                <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Edit Profile</a>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
                        <!-- Tombol Logout di tengah -->
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
</div>

@endsection


