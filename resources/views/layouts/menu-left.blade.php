<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{asset('assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.home')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}">
                            <i class="ni ni-circle-08 text-pink"></i>
                            <span class="nav-link-text">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customers.index')}}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Customers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pets.index')}}">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">Pets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.index') }}">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="ni ni-send text-dark"></i>
                            <span class="nav-link-text">Upgrade</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentation</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="" target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Pages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active active-pro" href="">
                            <i class="ni ni-send text-dark"></i>
                            <span class="nav-link-text">hello</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
