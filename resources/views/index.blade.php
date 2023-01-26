<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | {{ $title }} </title>
    <link rel="stylesheet" href="{{ config('app.path') }}/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.path') }}/assets/css/style.css">
</head>
<body style="background-color: #FFF3F3;">

    <!-- section 1 -->
    <section id="home-hero">
            @include('partials.navbar')
        <div class="container">
             <div class="row"> 
                 <div class="col-md-6"> 
                     <h6 class="pre-title">Welcome to</h6>
                     <h1 class="title">Fresh Food Bandung</h1>
                     <p>We are here to provide fresh food with premium quality. Enjoy...</p>
                     <a href="{{ config('app.path') }}/products" class="btn btn-warning">Shop Now</a>
                 </div>
                 <div class="col-md-6">
                     <div class="img-wrapper hero-img">
                         <img src="assets/images/hero-img.png" alt="">
                     </div>
                 </div>
             </div>
        </div>
        <div class="background-overlay">
            <img src="assets/images/pattern-1.svg" alt="">
        </div>
    </section>
    <!-- end of section 1 -->
    <section id="home-about">
        <div class="container" >
            <div class="row" >
                <div class="col-md-4" >
                    <div class="img-wrapper">
                        <div class="img-content">
                            <img src="assets/images/product_5a.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 content">
                    <div class="content-wrapper">
                        <h5 class="title">About Fresh Food Bandung</h5>
                        <p>Fresh Food Bandung has been operating for more than 3 years, we provide frozen meat and processed meat and deliver it to consumers. We provide solutions for those of you who want fresh and high quality food.</p>
                        <p>For those of you who have a food distribution business, a partnership package with Fresh Food Bandung is also available, you can contact us via the number provided in the lower right corner of this page.</p>
                        <p>We are very happy to be able to initiate and realize people's dreams of getting fresh and high quality food.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-products">
        <div class="container">
            <h2>Our Products</h2>
            <div class="row">

                @foreach ($products as $product)
                <div class="col-6 col-lg-2 col-md-3 card-wrapper">
                    <a href="{{ config('app.path') }}/products/{{ $product->slug }}">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="assets/images/{{ $product->image }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->currency }} {{ $product->price }}</p>
                            <form action="{{ route('cartdetail.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value={{$product->id}}>
                                <button type="submit" class="btn btn-danger check-out">
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
            <div class="d-flex justify-content-center mt-4">
                <a href="{{ config('app.path') }}/products" class="btn btn-danger more-products">More Products</a>
            </div>
        </div>
    </section>

    <section id="home-blogs" style="background-color: white;">
        <div class="container">
            <div class="sub-title"><h2>Blogs</h2></div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 blog">
                        <a href="blogs/{{ $blog->slug }}">
                            <div class="blog-wrapper">
                                <h4 class="blog-title">
                                    {{ $blog->title }}
                                </h4>
                                <p class="blog-date">{{ ($blog->created_at)->isoFormat('dddd D Y') }}</p>
                                <hr>
                                {!! $blog->excerpt !!}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="home-subscribe">
        <div class="container">
            <h3 class="subscribe-title">Get our latest info</h3>
            <hr>
            <form class="form">
                <input type="email" class="form-control mb-3" id="email" placeholder="Your Email">
                <button type="submit" class="btn btn-danger">Subscribe</button>
              </form>
        </div>
    </section>

    <section id="home-gallery">
        <div class="container">
            <h2 class="sub-title">Gallery</h2>
             <div class="row">

                @foreach ($galleries as $gallery)
                <div class="col-6 col-md-3 col-lg-2">
                        <div class="img-wrapper">
                            <img src="assets/images/{{ $gallery->image }}" alt="">
                       </div>
                </div>
                @endforeach
     
             </div>
        </div> 
    </section>


    @include('partials.footer')

</body>
</html>