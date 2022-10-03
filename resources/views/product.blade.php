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
    @include('partials.navbar')
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
                            <img src="../assets/images/{{ $product->image }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="detail-product">
                            <h3 class="name-product">
                                {{ $product->name }}
                            </h3>
                            <h6 class="price">{{ $product->currency }} {{ $product->price }}</h6>
                            <div class="description">
                                <h6>Description</h6>
                                <p>{{ $product->description }}</p>
                            </div>
                            <form action="{{ route('cartdetail.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value={{$product->id}}>
                                <button type="submit" class="btn btn-danger mb-4 add-cart">
                                    Add to Cart
                                    </button>
                              </form>
                         </div>
                    </div>
                </div>
            </div>
            </div>
         </div>
    </section>

    @include('partials.footer')
</body>
</html>