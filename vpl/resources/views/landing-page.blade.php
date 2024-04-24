<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/landing-page.css') }}">
</head>

<body>
  <header class="w-screen h-24 flex items-center px-6">
    <nav class="grow flex items-center gap-6 text-sm font-medium text-neutral-800">
      <a href="">
        <img class="w-36" src="{{ asset('images/logo_new_colored.svg') }}" alt="{{ config('app.name') }} logo">
      </a>
      <a href="#" class="">Features</a>
      <a href="#" class="">Pricing</a>
      <a href="#" class="">Product</a>
      <a href="#" class="ml-auto">Log in</a>
      <a href="#" class="px-2.5 py-2 rounded-md bg-black text-white shadow-sm">Try for free</a>
    </nav>
  </header>

  <main>
    <section class="h-5/6 w-full bg-cyan-100 px-32">
      <h1>The Last Phone System You'll Ever Need</h1>
    </section>
  </main>
</body>

</html>
