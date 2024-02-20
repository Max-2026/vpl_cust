<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Phone Line</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container pt-5">
        <div class="login-form">
            <form method="POST" action="{{ route('signup_post') }}">
                @csrf
                <h1 class="mt-2">Signup</h1>
                <p style="margin: 0.8rem 0; color: red;">
                    {!! implode('<br style="margin: 0.8rem 0" >', $errors->all()) !!}
                </p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input required type="email" class="form-control" name="email" placeholder="* Email"
                            value="{{ old('email') }}">
                        <span class="input-icon"><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="form-group col-md-6">
                        <input required type="password" class="form-control" name="password" placeholder="* Password">
                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input required type="text" class="form-control" name="first_name" placeholder="* First Name"
                            value="{{ old('first_name') }}">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="form-group col-md-6">
                        <input required type="text" class="form-control" name="last_name" placeholder="* Last Name"
                            value="{{ old('last_name') }}">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="tel" class="form-control" name="phone_number" placeholder="Phone"
                            value="{{ old('phone_number') }}">
                        <span class="input-icon"><i class="fa fa-phone"></i></span>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="tel" class="form-control" name="company_phone" placeholder="Company Phone"
                            value="{{ old('company_phone') }}">
                        <span class="input-icon"><i class="fa fa-phone"></i></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                        <span class="input-icon"><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="company_email" placeholder="Company Email">
                        <span class="input-icon"><i class="fa fa-envelope"></i></span>
                    </div>
                </div>

                <div class="text-center mt-2">
                    <button class="btn btn-primary">Register</button>
                </div>

                <div class="text-center mt-4">
                    <p style="font-size: 14px;">Already have an account? <a style="color:#0088cc;"
                            href="{{ route('login') }}">Login</a>
                    </p>
                </div>
                <div class="seperator"><b>or</b></div>
                <p>Sign Up With Your Social Media Account</p>
                <!-- Social login buttons -->
                <div class="social-icon">
                    <a href="#">
                        <button type="button" class="btn" style="background-color: #1DA1F2 !important;">
                            <i class="fa fa-twitter"></i>
                        </button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn" style="background-color: #4267B2 !important;">
                            <i class="fa fa-facebook"></i>
                        </button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn" style="background-color:#34A853 !important;">
                            <i class="fa fa-google"></i>
                        </button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn" style="background-color:#0077b5 !important;">
                            <i class="fa fa-linkedin"></i>
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
