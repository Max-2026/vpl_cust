<!DOCTYPE html>
<html class="h-full bg-white">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - {{ config('app.name') }}</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="h-full">
  <div class="min-h-full flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-cyan-600">{{ config('app.name') }}</h2>
          <p class="mt-2 text-sm text-gray-600">
            Create your account
          </p>
        </div>
        <div class="mt-8">
          <div class="mt-6">
            <form action="{{ route('handle-register') }}" method="POST" class="space-y-6">
              @csrf

              @if ($errors->has('name'))
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full name *</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" aria-invalid="true" aria-describedby="name-error">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <p class="mt-2 text-sm text-red-600" id="name-error">
                  {{ $errors->first('name') }}
                </p>
              </div>
              @else
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full name *</label>
                <div class="mt-1">
                  <input tabindex="0" id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
                </div>
              </div>
              @endif

              @if ($errors->has('email'))
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address *</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" aria-invalid="true" aria-describedby="name-error">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <p class="mt-2 text-sm text-red-600" id="email-error">
                  {{ $errors->first('email') }}
                </p>
              </div>
              @else
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address *</label>
                <div class="mt-1">
                  <input tabindex="0" id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
                </div>
              </div>
              @endif

              @if ($errors->has('phone'))
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone number *</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input id="phone" name="phone" type="tel" autocomplete="phone" required value="{{ old('phone') }}" class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" aria-invalid="true" aria-describedby="name-error">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <p class="mt-2 text-sm text-red-600" id="phone-error">
                  {{ $errors->first('phone') }}
                </p>
              </div>
              @else
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone number *</label>
                <div class="mt-1">
                  <input tabindex="0" id="phone" name="phone" type="tel" autocomplete="phone" required value="{{ old('phone') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
                </div>
              </div>
              @endif

              @if ($errors->has('password'))
              <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password *</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input id="password" name="password" type="password" autocomplete="password" required value="{{ old('password') }}" class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" aria-invalid="true" aria-describedby="name-error">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
                <p class="mt-2 text-sm text-red-600" id="password-error">
                  {{ $errors->first('password') }}
                </p>
              </div>
              @else
              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-gray-700">Password *</label>
                <div class="mt-1">
                  <input tabindex="1" id="password" name="password" type="password" autocomplete="current-password" required value="{{ old('password') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
                </div>
              </div>
              @endif

              <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-semibold text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">Register</button>
              </div>
            </form>
          </div>
          <div>
            <div class="mt-6 relative">
              <div class="relative flex justify-center text-sm">
                <a href="{{ route('login') }}" class="px-2 bg-white text-cyan-700 hover:underline">
                  Or login to your account
                </a>
              </div>
            </div>
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
