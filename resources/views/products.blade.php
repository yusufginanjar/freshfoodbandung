<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | {{ $title }} </title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

    
    <body id="page-products"> 
        
        @include('partials.navbar')

    <section id="menus" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>
                        <a href="/">Home</a><a href="/products">/Products</a>
                    </h3>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <form class="d-flex" action="/products">
                        <input type="text" class="form-control me-2" placeholder="search" name="search">
                    </form>
                </div>
                <div class="col-md-3">
                    <ul class="d-flex mt-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="sort" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sort
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="sort">
                              <li>
                                <form class="d-flex" action="/products">
                                    <input type="hidden" name="sort" value="name">
                                    <button type="submit" class="btn btn btn-link">A - Z</button>
                                </form>
                              </li>
                              <li>
                                  <form class="d-flex" action="/products">
                                    <input type="hidden" name="sort" value="lowest-price">
                                    <button type="submit" class="btn btn btn-link">Lowest Price</button>
                                </form>
                            </li>
                              <li>
                              <li>
                                  <form class="d-flex" action="/products">
                                    <input type="hidden" name="sort" value="highest-price">
                                    <button type="submit" class="btn btn btn-link">Highest Price</button>
                                </form>
                            </li>
                              <li>
                            </ul>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="filter" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Filter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="filter">
                              <li> 
                                  <form class="d-flex" action="/products">
                                        <input type="hidden" name="filter" value="Premium Pork">
                                        <button type="submit" class="btn btn btn-link">Premium Pork</button>
                                  </form>
                              </li>
                              <li> 
                                  <form class="d-flex" action="/products">
                                        <input type="hidden" name="filter" value="Premium Beef">
                                        <button type="submit" class="btn btn btn-link">Premium Beef</button>
                                  </form>
                              </li>
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
                                    <img src="assets/images/{{ $product->image }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->currency }} {{ number_format($product->price) }}</p>
                                    <form action="{{ route('cartdetail.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value={{$product->id}}>
                                        <button type="submit" class="btn btn-danger">
                                            Add to Cart
                                            </button>
                                      </form>
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

</html>