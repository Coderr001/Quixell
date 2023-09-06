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
                                <img src="{{ asset('images/'.$user->image) }}" alt="User Avatar" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    
                            
                                    <div class="form-group">
                                        <label for="image">Profile Photo</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="m" {{ $user->gender === 'm' ? 'selected' : '' }}>Male</option>
                                            <option value="f" {{ $user->gender === 'f' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                    <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                            
                            
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </form>

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


