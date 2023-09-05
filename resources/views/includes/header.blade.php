{{-- <div class="navbar bg-dark flex w-100">
    <div class="navbar-inner bg-dark ">
        <a href="/" id="logo" class="navbar-brand">QUIXELL</a>
        <ul class="nav navbar-nav navbar-right text-center">
            <li><a href="/" class="text-white">Home</a></li>
            <li><a href="/collections"  class="text-white">Collections</a></li>
            <li><a href="/cart"  class="text-white">Cart</a></li>
            <li><a href="/aboutus"  class="text-white">About Us</a></li>
            <li><a href="/profile"  class="text-white">Profile</a></li>
        </ul>
    </div>
</div> --}}

<div class="navbar navbar-inverse navbar-static-top bg-dark">
    <div class="container">
      <a href="" class="navbar-brand text-white">Home</a>
      @if(Auth::check())
        <ul class="nav navbar-nav navbar-right text-center list-group list-group-horizontal unstyled text-white ">
            <li class="mx-3 text-white"><a href="/" class="text-decoration-none text-reset">Home</a></li>
            <li class="mx-3 text-white"><a href="collecions" class="text-decoration-none text-reset">Collections</a></li>
            <li class="mx-3 text-white"><a href="cart" class="text-decoration-none text-reset">Carts</a></li>
            <li class="mx-3 text-white"><a href="about" class="text-decoration-none text-reset">About us</a></li>
            <li class="mx-3 text-white"><a href="profile/?id={{Auth::user()->id }}" class="text-decoration-none text-reset">Profile</a></li>
        </ul>
      </div>
      @else

      @endif
    </div>
  </div>