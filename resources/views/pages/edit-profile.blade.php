@extends('layouts.default')

@section('content')
<div class="container">
    <h1 class="mt-3">Edit Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="photo">Profile Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo">
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
                <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
    
</div>
@stop

