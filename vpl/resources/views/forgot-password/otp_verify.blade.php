<!DOCTYPE html>
<html class="h-full bg-white">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - {{ config('app.name') }}</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="h-full">
  <div class="min-h-full flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96 h-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-cyan-600">{{ config('app.name') }}</h2>
          <p class="mt-2 text-sm text-gray-600">
            Enter Your OTP
          </p>
        </div>
        <div class="mt-8">
          <div class="mt-6">
            <form action="{{ url('/verify-otp') }}" method="post" class="space-y-6">
              @csrf
              <div>
                <label for="otp" class="block text-sm font-medium text-gray-700">OTP
                  Verification</label>
                <div class="mt-1">
                  <input id="otp" name="otp" type="number" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
                </div>
                <p class="mt-2 text-sm text-red-600" id="password-error">
                  {{ $errors->first('otp') }}
                </p>
              </div>
              <input type="hidden" name="email" value="{{$email}}">
              <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-semibold text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">Submit</button>
              </div>
            </form>
          </div>
          <div class="mt-4 text-center text-sm">
            <form action="{{ url('/send-otp') }}" method="post">
              @csrf
              <input type="hidden" name="email" value="{{$email}}">
              <input type="submit" class="font-medium text-cyan-700 hover:text-cyan-500" value="Resend OTP">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="transition-opacity duration-1000 ease-in-out absolute inset-0 h-full w-full object-cover animate-pulse" src="{{ asset('images/bridge-small.jpg') }}" alt="">
      <img id="wallpaper" class="transition-opacity duration-1000 ease-in-out opacity-0 absolute inset-0 h-full w-full object-cover" src="{{ asset('images/bridge.jpg') }}" loading="lazy" alt="">
    </div>
  </div>
  <script>
  const wallpaper = document.getElementById('wallpaper');

  if (wallpaper.complete) {
    loaded();
  } else {
    wallpaper.addEventListener('load', loaded);
  }

  function loaded() {
    const overlay = wallpaper.previousElementSibling;
    wallpaper.classList.remove('opacity-0');
    overlay.classList.add('opacity-0');
  }

  </script>
</body>

</html>
