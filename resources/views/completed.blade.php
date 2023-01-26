<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Completed </title>
    <link rel="stylesheet" href="{{ config('app.path') }}/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.path') }}/assets/css/style.css">
</head>
<body id="completed">
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

    <section class="contents">
        <div class="container">
            <h4 class="txt-orange">
                Yey! Completed
            </h4>
            <div class="img-wrapper mb-4">
                <img src="assets/images/completed.png" alt="">
            </div>
            <h6>
                We will send billing information via {{ $media }} to {{ $contact }}
            </h6>
            <a href="{{ config('app.path') }}/" class="text-decoration-underline mt-4 txt-orange ">back to home</a>
        </div>
    </section>
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>

</body>
</html>