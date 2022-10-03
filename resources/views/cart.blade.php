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
                
            @if(isset($products))
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
                    @foreach ($products->detail as $item)
                    <div class="row pb-5">
                        <div  class="col-md-6 mb-4">
                            <div class="card-horizontal">
                                <form action="{{ route('cartdetail.destroy', $item->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button type="submit" class="trash"></button>                    
                                  </form>
                                <div class="img-wrapper">
                                    <img src="assets/images/product_4.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                <h5 class="card-title">{{ $item->product->name }}</h5>
                                <p class="card-text">{{ $item->product->price }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <form action="{{ route('cartdetail.update',$item->id) }}" method="post">
                                    @method('patch')
                                    @csrf()
                                      <input type="hidden" name="param" value="minus">
                                      <button class="btn btn-danger minus">-</button>
                                    </form>
                                
                                <input type="text" class="form-control text-center" id="amount" value="{{ $item->qty }}" disabled>
                                <form action="{{ route('cartdetail.update',$item->id) }}" method="post">
                                    @method('patch')
                                    @csrf()
                                      <input type="hidden" name="param" value="plus">
                                      <button class="btn btn-danger plus">
                                      +
                                      </button>
                                </form>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                    <div class="" style="margin-bottom: 100px">
                        <p><a href="/products"><u>See more Products</u></a></p>
                    </div>
                </div>
                <div class="col-md-4 cart-totals">
                    <h5>Cart Totals</h5>
                    <div class="d-flex mt-4 mb-2">
                        <h5>Sub Total</h5>
                        <h5 class="ms-auto fw-bold">IDR {{ number_format($products->subtotal, 2) }}</h5>
                    </div>
                    <div class="d-flex">
                        <h5>Total</h5>
                        <h5 class="ms-auto fw-bold">IDR {{ number_format($products->total, 2) }}</h5>
                    </div>
                    <div class="my-4 checkout">
                        <a href="/checkout">
                            <button class="btn btn-danger mb-4 add-cart">
                                Checkout
                        </button>

                        </a>
                      </div>
                </div>
            </div>
            @else
            <div class="mt-4 text-center" style="margin-bottom: 100px">
                <p>No item in cart! <a href="/products"><u>Back to Products</u></a></p>
            </div>
            @endif

         </div>
    </section>
    @include('partials.footer')

</body>
</html>