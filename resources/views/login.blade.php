<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Login </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="login">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <h1>LOGIN</h1>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="wrapper mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" 
                            @if(session()->has('guestemail'))
                                value="{{ session('guestemail') }}"                                 
                            @else
                                value="{{ old('email') }}"                         
                            @endif
                            required autofocus>

                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            
                            
                            <label for="password" class="mt-2 form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                            @if(session()->has('guestpassword'))
                                value="{{ session('guestpassword') }}"                                                         
                            @endif
                            required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-danger add-cart mb-4">Login</button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ config('app.path') }}/signup">
                                    <div class="btn btn btn-outline-danger add-cart mb-4">
                                        Create Account
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                    <form action="/guestsignup" method="POST">
                        @csrf
                        <button type="submit" class="text-decoration-underline text-muted" style="background-color: transparent; border: none">Continue as a guest</button>
                    </form>
                </div>
                <div class="col-md-6 right-side">
                    <div class="for-large d-flex align-items-center">
                        <div class="wrapper">
                            <h6>WELCOME TO</h6>
                            <h2>FRESH FOOD BANDUNG</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>

</body>
</html>