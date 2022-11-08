<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/{{ config('app.path') }}/">
                    <img src="../assets/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ config('app.path') }}/#home-about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ config('app.path') }}/products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ config('app.path') }}/blogs">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ config('app.path') }}/cart">Cart</a>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->first_name }}
                                </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li>
                                    <form action="{{ config('app.path') }}/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            
                            </ul>
                          </li>
                        @else
                        <li class="nav-item login">
                            <a class="nav-link" href="{{ config('app.path') }}/login">Login</a>
                        </li>
                        @endauth
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>