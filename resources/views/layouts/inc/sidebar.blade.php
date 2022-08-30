    <div class="container">
        <div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo"><a href="{{ url('categories') }}" class="simple-text logo-normal">
                <img src="{{ asset('assets/images/logo3.png') }}" height="75px" width="75px" alt="">
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item {{ Request::is('dashboard') ? 'active':''; }}">
                    <a class="nav-link" href="{{ url('dashboard') }}">
                        {{-- <i class="material-icons">dashboard</i> --}}
                        <p class="fw-bolder">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('categories') ? 'active':''; }} ">
                    <a class="nav-link" href="{{ url('categories') }}">
                        {{-- <i class="material-icons">category</i> --}}
                        <p class="fw-bolder">Categories</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('add-category') ? 'active':''; }} ">
                    <a class="nav-link" href="{{ url('add-category') }}">
                        {{-- <i class="material-icons">add</i> --}}
                        <p class="fw-bolder">Add Category</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('products') ? 'active':''; }} ">
                    <a class="nav-link" href="{{ url('products') }}">
                        {{-- <i class="material-icons">phone_iphone</i> --}}
                        <p class="fw-bolder">Products</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('add-products') ? 'active':''; }} ">
                    <a class="nav-link" href="{{ url('add-products') }}">
                        {{-- <i class="material-icons">add</i> --}}
                        <p class="fw-bolder">Add Products</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('orders') ? 'active':''; }}">
                    <a class="nav-link" href="{{ url('orders') }}">
                        {{-- <i class="material-icons">content_paste</i> --}}
                        <p class="fw-bolder">Orders</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('users') ? 'active':''; }}">
                    <a class="nav-link" href="{{ url('users') }}">
                        {{-- <i class="material-icons">person</i> --}}
                        <p class="fw-bolder">Users</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>