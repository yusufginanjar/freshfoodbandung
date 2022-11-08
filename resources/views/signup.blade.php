<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Food Bandung | Signup </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="signup">
    <section>
        <div class="container">
            <h1 class="text-center">SIGN UP</h1>
            <form action="/{{ config('app.path') }}/signup" method="POST">
                @csrf
                <div class="wrapper mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" required value="{{ old('first_name') }}">

                            @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control  @error('last_name') is-invalid @enderror" id="last_name" name="last_name" required value="{{ old('last_name') }}">

                            @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="whatsapp" class="form-label">Whatsapp Number</label>
                    <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" required value="{{ old('whatsapp') }}">
                    @error('whatsapp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="password_confirmation" class="form-label @error('first_name') is-invalid @enderror">Password Confirmation</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-danger add-cart mb-4">
                    Sign Up
                </button>

            </form>
        </div>
    </section>
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>

</body>
</html>