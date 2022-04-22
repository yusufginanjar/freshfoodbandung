<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Checkout </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="checkout">
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
                    <form>
                        <div class="row">
                        <div class="col-md-7">
                            <label for="fname" class="form-label">First name*</label>
                            <input type="text" class="form-control" id="fname" name="fname" >
                            <label for="lname" class="form-label">Last name*</label>
                            <input type="text" class="form-control" id="lname" name="lname" >

                            <label for="company" class="form-label">Company Name (Optional)</label>
                            <input type="text" class="form-control" id="company" name="company" >

                            <label for="country" class="form-label">Country/Region</label>
                            <input type="text" class="form-control" id="country" name="country" value="Indonesia">

                            <label for="province" class="form-label">Province*</label>
                            <input type="text" class="form-control" id="province" name="province" >

                            <label for="address" class="form-label">Complete Address*</label>
                            <input type="text" class="form-control" id="address" name="address" >

                            <label for="postcode" class="form-label">Postcode/ZIP</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" >

                            <label for="wa" class="form-label">whatsapp Number*</label>
                            <input type="text" class="form-control" id="wa" name="wa" >
                            
                            <div class="mb-3 checkbox">
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" id="checkbox-label" for="checkbox">I don't have WhatsApp number and want to reveice info via e-mail</label>
                            </div>

                            <label for="email" class="form-label">Email address*</label>
                            <input type="email" class="form-control" id="email">

                            <label for="notes" class="form-label">Order Notes (optional)</label>
                            <input type="notes" class="form-control" id="notes">


                        </div>
                        <div class="col-md-5 orders">
                            <h4 class="title">Your Order</h4>
                            <h5>Products</h5>
                            <hr>
                            <div class="mt-4 mb-2">
                                <h6>BEEF MEATBALLS</h6>
                                <h6 class="txt-orange">IDR 161,000</h6>
                            </div>
                            <div class="mb-2">
                                <h6>PORK BRATWURST</h6>
                                <h6 class="txt-orange">IDR 145,000</h6>
                            </div>
                            <hr>
                            <div class="checkout-total mb-4">
                                <h5>Total</h5>
                                <h5 class="ms-auto ">IDR 161,000</h5>
                            </div>

                            <p>Prices above do not include shipping cost. We will inform you the shipping costs via WhatsApp after Order process finished.</p>
                            <button type="submit" class="btn btn-danger my-4 add-cart">
                                <!-- temporary href -->
                                <a href="completed.html">Checkout</a>
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