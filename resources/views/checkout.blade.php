<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Checkout </title>
    <link rel="stylesheet" href="{{ config('app.path') }}/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.path') }}/assets/css/style.css">
</head>
<body id="checkout">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid d-flex justify-content-center">
                    <a class="navbar-brand" href="{{ config('app.path') }}/">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="steps">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="number ">
                    1
                </div>
                <div class="number active">
                    <span class="border"></span>2
                </div>
            </div>
        </div>
    </section>

    <div class="section" id="checkout-form">
        <div class="container">
            <div class="row">
                <div class="">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/checkout" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-7">
                            <label for="first_name" class="form-label">First name*</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">

                            <label for="whatsapp" class="form-label">Whatsapp Number*</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                            
                            <div class="mb-3 checkbox">
                                <input type="checkbox" class="form-check-input" name="not_whatsapp" id="not_whatsapp">
                                <label class="form-check-label" id="checkbox-label" for="not_whatsapp">(Alternative) I don't have WhatsApp number and want to receive info via e-mail</label>
                            </div>

                            <label for="email" class="form-label">Email address*</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                            <label for="company" class="form-label">Company Name (Optional)</label>
                            <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}">

                            <label for="country" class="form-label">Country/Region</label>
                            <input type="text" class="form-control" id="country" name="country" value="Indonesia" value="{{ old('country') }}">

                            <label for="province" class="form-label">Province*</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>

                            <label for="address" class="form-label">Complete Address*</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>

                            <label for="postcode" class="form-label">Postcode/ZIP</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" value="{{ old('postcode') }}">

                            <label for="notes" class="form-label">Order Notes (optional)</label>
                            <input type="notes" class="form-control" id="notes" name="notes" value="{{ old('notes') }}">


                        </div>
                        <div class="col-md-5 orders">
                            <h4 class="title">Your Order</h4>
                            <h5>Products</h5>
                            <hr class="mb-4">

                            @foreach ($products->detail as $item)
                            <div class="mb-2">
                                <h6>{{ $item->product->name }}</h6>
                                <h6 class="txt-orange">IDR {{ number_format($item->subtotal, 2) }}</h6>
                            </div>
                            @endforeach
                            <hr>
                            <div class="checkout-total mb-4">
                                <h5>Total</h5>
                                <h5 class="ms-auto ">IDR {{ number_format($products->total, 2) }}</h5>
                            </div>

                            <p>Prices above do not include shipping cost. We will inform you the shipping costs via WhatsApp after Order process finished.</p>
                            <button type="submit" class="btn btn-danger my-4 add-cart">
                                Checkout
                                </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    @include('partials.footer')

</body>
</html>