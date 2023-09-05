@extends('layouts.default')
@section('content')

    
    <div class="container">

        <h1 class="mt-3 mb-5">Register</h1>

        <form action="" method="POST">
            @csrf
            <input type="text" name="first_name" placeholder="name">
            <input type="text" name="last_name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="password">
            <input type="text" name="password_confirmation" placeholder="password_confirmation">
            {{-- gender radio --}}
            <input type="radio" id="f" name="gender" value="f">
            <label for="f">female</label><br>
            <input type="radio" id="m" name="gender" value="m">
            <label for="m">male</label><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="submit" value="submit">
        </form>
    </div>
@stop