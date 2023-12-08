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
  <div class="container-1 mt-5">
    <div class="login-form" style="width: 25%;">
      <form method="POST" action="{{ route('login_post') }}">
        @csrf
        <h1 class="mt-2">Login</h1>
        <p style="margin: 0.8rem 0; color: red;">
          {!! implode('<br style="margin: 0.8rem 0" >', $errors->all()) !!}
        </p>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <span class="input-icon"><i class="fa fa-envelope"></i></span>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="input-icon"><i class="fa fa-lock"></i></span>
        </div>
        <div class="text-center">
        <button class="btn btn-primary">Login</button>   
        </div>   
        <a class="reset-psw" href="#">Forgot your password?</a>
        <div class="seperator"><b>or</b></div>
        <p>Sign in with your social media account</p>
        <!-- Social login buttons -->
        <div class="social-icon">
          <a href="{{ route('third_party_login', ['provider_name' => 'twitter']) }}">
            <button type="button" class="btn" style="background-color: #1DA1F2 !important;">
              <i class="fa fa-twitter"></i>
            </button>
          </a>
          <a href="{{ route('third_party_login', ['provider_name' => 'facebook']) }}">
            <button type="button" class="btn" style="background-color: #4267B2 !important;">
              <i class="fa fa-facebook"></i>
            </button>
          </a>
          <a href="{{ route('third_party_login', ['provider_name' => 'google']) }}">
            <button type="button" class="btn" style="background-color:#34A853 !important;">
              <i class="fa fa-google"></i>
            </button>
          </a>
          <a href="{{ route('third_party_login', ['provider_name' => 'linkedin']) }}">
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
