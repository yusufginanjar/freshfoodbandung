{{-- dd($blogs) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | {{ $title }} </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background-color: #FFF3F3;">

    <!-- section 1 -->
    <section id="home-hero">
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#home-about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="products.html">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blogs.html">Blogs</a>
                                </li>
                                <li class="nav-item login">
                                    <a class="nav-link" href="login.html">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="checkout.html">Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container">
             <div class="row"> 
                 <div class="col-md-6"> <!-- make display to be one column in mobile but 2 columnns in laptop-->
                     <h6 class="pre-title">Welcome to</h6>
                     <h1 class="title">Fresh Food Bandung</h1>
                     <p>We are here to provide fresh food with premium quality. Enjoy...</p>
                     <a href="products.html" class="btn btn-warning">Shop Now</a>
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
                <div class="col-6 col-lg-2 col-md-3">
                    <a href="/products/{{ $product->slug }}">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="assets/images/product_1.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}</p>
                            <a href="cart.html" class="btn btn-danger">Check Out</a>
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
                <a href="products.html" class="btn btn-danger more-products">More Products</a>
            </div>
        </div>
    </section>

    <section id="home-blogs" style="background-color: white;">
        <div class="container">
            <div class="sub-title"><h2>Blogs</h2></div>
            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4 blog">
                    <a href="blog/{{ $blogs[$i]->slug }}">
                        <div class="blog-wrapper">
                            <h4 class="blog-title">
                                {{ $blogs[$i]->title }}
                            </h4>
                            <p class="blog-date">{{ $blogs[$i]->created_at }}</p>
                            <hr>
                            <p>{{ $blogs[$i]->excerpt }}</p>
                        </div>
                    </a>
                </div>
                @endfor

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
                    <a href="single.html">
                        <div class="img-wrapper">
                            <img src="assets/images/{{ $gallery->image }}" alt="">
                       </div>
                   </a>
                </div>
                @endforeach
     
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
                                <img src="assets/icons/shopee-logo.svg" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div class="img-wrapper">
                                <img src="assets/icons/whatsapp-logo.svg" alt="">
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

    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>

</body>
</html>