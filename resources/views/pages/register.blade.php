@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="mt-3 mb-5">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Tambahkan input untuk first_name, last_name, email, password, dll. -->
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            </div>
            <!-- Gender radio -->
            <div class="form-check">
                <input type="radio" id="f" name="gender" value="f" class="form-check-input" required>
                <label for="f" class="form-check-label">Female</label>
            </div>
            <div class="form-check">
                <input type="radio" id="m" name="gender" value="m" class="form-check-input" required>
                <label for="m" class="form-check-label">Male</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Register</button>
        </form>
    </div>
@stop
