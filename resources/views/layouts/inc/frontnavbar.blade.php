<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mt-auto" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo3.png') }}" height="75px" width="75px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ Request::is('index') ? 'active':''; }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ Request::is('category') ? 'active':''; }}"
                        href="{{ url('category') }}">Category</a>
                </li>
        </ul>
        <div class="search-bar">
                   <form action="{{url('searchproduct')}}" method="POST">
                    @csrf
                       <div class="input-group ">
                           <input type="search" class="form-control rounded-pill border border-1 border-dark" id="search_product" name="product_name"  placeholder="Search">
                           <button type="submit" class="input-group-text rounded btn btn-dark rounded-pill border border-1 border-dark" ><i class="fa fa-search"></i></button>
                         </div>
                   </form>
               </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item my-auto">
                    <a class="nav-link {{ Request::is('cart') ? 'active':''; }}"
                        href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i>
                        <span class="badge rounded-pill bg-dark cart-count">0</span>
                    </a>
                </li>
                <li class="nav-item my-auto">
                    <a class="nav-link {{ Request::is('wishlist') ? 'active':''; }}"
                        href="{{ url('wishlist') }}"><i class="fa fa-heart"></i>
                        <span class="badge rounded-pill bg-dark wishlist-count">0</span>
                    </a>
                </li>
                <li class="nav-item">
                    @guest
                    @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown bg-dark rounded-pill">
                    <a class="nav-link dropdown-toggle text-light" href="javascript:;" role="button" id="navbarDropdownProfile"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name.' '.Auth::user()->lname}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="{{ url('my-orders') }}">My Orders</a>
                        <a class="dropdown-item" href="#">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
                @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>