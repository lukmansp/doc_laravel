<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('product.index')}}">Laserind</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Shopping <span
                    class="badge badge-primary">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> User management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @if(Auth::check())
                    <a class="dropdown-item" href="{{route('user.profile')}}">User Profile</a>
                    <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                    @else
                    <a class="dropdown-item" href="{{route('user.signup')}}">Sign Up</a>
                    <a class="dropdown-item" href="{{route('user.signin')}}">Sign In</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>
