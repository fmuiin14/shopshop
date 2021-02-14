<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <ul class="offcanvas__widget">
        <li><span class="icon_search search-switch"></span></li>
        <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
    </ul>
    <div class="offcanvas__logo">
        <a href="{{route('home')}}"><img src="/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Register</a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('category')}}">Categories</a></li>
                        <li><a href="#">Rewards</a></li>
                        @guest
                        <li><a href="{{route('register')}}">Sign Up</a></li>
                        <li><a class="btn btn-primary px-4" href="{{route('login')}}">Sign In</a></li>
                        @endguest
                    </ul>
                </nav>
            </div>
            @auth
            <div class="col-lg-3">
                <div class="header__right">
                    <ul class="header__right__widget">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="/images/icon-user.png" alt="" style="width: 40px;" class="rounded-circle mr-2 profile-picture">
                                Hi, {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{route('logout')}}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cart')}}" class="nav-link d-inline-block mt-2">
                                @php
                                $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                                @endphp
                                @if ($carts > 0)
                                <img src="/images/icon-cart-filled.svg" alt="">
                                <div class="cart-badge">{{$carts}}</div>
                                @else
                                <img src="/images/icon-cart-empty.svg" alt="">
                                @endif
                            </a>
                        </li>
                        <li><span class="icon_search search-switch"></span></li>
                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
