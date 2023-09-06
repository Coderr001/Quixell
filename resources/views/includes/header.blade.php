{{-- <div class="navbar bg-dark flex w-100">
    <div class="navbar-inner bg-dark ">
        <a href="/" id="logo" class="navbar-brand">QUIXELL</a>
        <ul class="nav navbar-nav navbar-right text-center">
            <li><a href="/" class="text-white">Home</a></li>
            <li><a href="/collections"  class="text-white">Collections</a></li>
            <li><a href="/cart"  class="text-white">Cart</a></li>
            <li><a href="/aboutus"  class="text-white">About Us</a></li>
            <li><a href="/profile"  class="text-white">Profile</a></li>
            <li><a href="/login"  class="text-white">Login</a></li>
            <li><a href="/register"  class="text-white">Register</a></li>  
        </ul>
    </div>
</div> --}}

<div class="navbar navbar-inverse navbar-static-top bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand text-white">Home</a>
        @if(Auth::check())
            <a href="{{ route('collections') }}" class="navbar-brand text-white">Collections</a>
            <a href="{{ route('cart') }}" class="navbar-brand text-white">Cart</a>
            <a href="{{ route('aboutus') }}" class="navbar-brand text-white">About Us</a>
            <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="navbar-brand text-white">Profile</a>          
        @endif
        <a href="{{ route('login') }}" class="navbar-brand ml-auto text-white">Login</a>
        <a href="{{ route('register') }}" class="navbar-brand text-white">Register</a>
    </div>
</div>
