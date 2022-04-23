<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | {{ $title }}</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body id="page-single">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img src="../assets/images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/#home-about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blogs">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart">Cart</a>
                            </li>
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->first_name }}
                                    </a>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                
                                </ul>
                              </li>
                            @else
                            <li class="nav-item login">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            @endauth
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section id="menus" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6><a href="/">Home</a><a href="/products">/ Products</a>/ {{ $product->name }}</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="single">
        <div class="container">
            <h2>Our Products</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="img-wrapper">
                            <img src="../assets/images/product_1.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="detail-product">
                            <h3 class="name-product">
                                {{ $product->name }}
                            </h3>
                            <h6 class="price">{{ $product->price }}</h6>
                            <div class="description">
                                <h6>Description</h6>
                                <p>{{ $product->description }}</p>
                            </div>
                            <form class="">
                                <div class="d-flex">
                                    <button class="btn btn-danger mb-4 minus">-</button>
                                    <input type="text" class="form-control text-center" id="amount" placeholder="1">
                                    <button class="btn btn-danger plus">+</button>
                                </div>
                                <button type="submit" class="btn btn-danger mb-4 add-cart">
                                    <a href="cart.html">Add to Cart</a>
                                    </button>
                              </form>
                         </div>
                    </div>
                </div>
            </div>
            </div>
         </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>Fresh Food Bandung</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <p class="mt-2">
                        visit us on:
                    </p>
                    <div class="d-flex">
                        <a href="">
                            <div class="img-wrapper">
                                <img src="../assets/icons/shopee-logo.svg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div class="img-wrapper">
                                <img src="../assets/icons/whatsapp-logo.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <hr>
                </div>
                <div class="col-md-5">
                    <ul>
                        <a href="">
                            <li class="tiktok">@fresh_food_bandung</li>
                        </a>
                        <a href="">
                            <li class="whatsapp">+6285643773721</li>
                        </a>
                        <a href="">
                            <li class="address">Margaasih, Kab. Bandung, 40218</li>
                        </a>
                    </ul>
                </div>
                <hr>
            </div>
            <p class="text-muted d-flex justify-content-center">Copyright 2022 © Fresh Food Bandung</p>
        </div>
    </footer>

    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>

</body>
</html>