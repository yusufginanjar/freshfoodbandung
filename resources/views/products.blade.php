@extends('layouts.main')

@section('content')
    
    <body id="page-products"> 
        
        @include('partials.navbar')



    <section id="menus" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Home/Products</h3>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>
                <div class="col-md-3">
                    <ul class="d-flex mt-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="sort" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sort
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="sort">
                              <li><a class="dropdown-item" href="#">A - Z</a></li>
                              <li><a class="dropdown-item" href="#">Lowest Price</a></li>
                              <li>
                              <li><a class="dropdown-item" href="#">Highest Price</a></li>
                              <li>
                            </ul>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="filter" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Filter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="filter">
                              <li><a class="dropdown-item" href="#">Premium Pork</a></li>
                              <li><a class="dropdown-item" href="#">Premium Beef</a></li>
                              <li>
                            </ul>
                          </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <h2>Our Products</h2>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-6 col-lg-2 col-md-3 card-wrapper">
                        <a href="/products/{{ $product->slug }}">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="assets/images/product_1.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->price }}</p>
                                    <a href="/cart" class="btn btn-danger  check-out">Check Out</a>
                                </div>
                                <div class="label">
                                    <span>{{ $product->badge }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
         </div>
    </section>

    @include('partials.footer')

</body>

    @endsection