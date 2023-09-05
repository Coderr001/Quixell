@extends('layouts.default')
@section('content')
    <div class="container">
        <form action="" method="POST">
            @csrf
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="password">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="submit" value="submit">
        </form>
    </div>
    
@stop