<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Cart </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="cart">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid d-flex justify-content-center">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="steps">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="number active">
                    <span class="border"></span>1
                </div>
                <div class="number">
                    2
                </div>
            </div>
        </div>
    </section>

    <section id="single">       
        <div class="container">
                

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mt-5 mb-3 fw-bold">Product</h4>
                        </div>
                        <div class="col-md-6 qty">
                            <h4 class="mt-5 mb-3 fw-bold">Quantity</h4>
                        </div>
                    </div>
                    <hr>

                    @foreach ($products as $product)
                    <div class="row pb-5">
                        <div  class="col-md-6 mb-4">
                            <div class="card-horizontal">
                                <a href="">
                                    <div class="trash"></div>
                                </a>
                                <div class="img-wrapper">
                                    <img src="assets/images/product_4.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-danger minus">-</button>
                                <input type="text" class="form-control text-center" id="amount" placeholder="1">
                                <button class="btn btn-danger plus">+</button>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
                <div class="col-md-4 cart-totals">
                    <h5>Cart Totals</h5>
                    <div class="d-flex mt-4 mb-2">
                        <h5>Sub Total</h5>
                        <h5 class="ms-auto fw-bold">IDR 161,000</h5>
                    </div>
                    <div class="d-flex">
                        <h5>Total</h5>
                        <h5 class="ms-auto fw-bold">IDR 161,000</h5>
                    </div>
                    <form class="my-4 checkout">
                        <!-- temporary HREF -->
                        <button type="submit" class="btn btn-danger mb-4 add-cart">
                            Checkout
                            </button>
                      </form>
                </div>
            </div>
         </div>
    </section>

    

    @include('partials.footer')

</body>
</html>