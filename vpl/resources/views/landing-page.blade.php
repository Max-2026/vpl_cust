<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="w-screen h-screen bg-cover bg-center bg-no-repeat bg-[url('{{asset('images/am-small.jpg')}}')]">
  <header class="w-screen h-16 md:h-24 flex items-center px-6">
    <nav class="hidden md:flex grow items-center gap-6 text-sm font-medium text-neutral-800">
      <a href="">
        <img class="w-28 md:w-36" src="{{ asset('images/logo_new_colored.svg') }}" alt="{{ config('app.name') }} logo">
      </a>
      <a href="#" class="">Features</a>
      <a href="#" class="">Pricing</a>
      <a href="#" class="">Product</a>
      <a href="#" class="ml-auto">Log in</a>
      <a href="#" class="px-2.5 py-2 rounded-md bg-black text-white shadow-sm">Use for free</a>
    </nav>
    <nav class="w-full flex items-center justify-between md:hidden">
      <a href="">
        <img class="w-28 md:w-36" src="{{ asset('images/logo_new_black.svg') }}" alt="{{ config('app.name') }} logo">
      </a>
      <button class="">
        <svg class="w-8 h-8" data-slot="icon" aria-hidden="true" fill="currentColor" stroke-width="1.8" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>
    </nav>
  </header>

  <main>
    <section class="absolute top-1/4 left-1/2 -translate-x-1/2 w-full px-4 text-center">
      <h1 class="text-white text-3xl font-semibold mb-4">The Last Phone System You'll Ever Need</h1>
      <p class="my-8 mb-20">Transform the way you communicate, Enjoy seamless incoming SMS capabilities and stay tuned for more innovative features rolling out soon.</p>
      <a href="" class="flex items-center justify-center gap-2 rounded-md bg-black text-white text-lg py-3 px-5 mx-16">
        Use for free
        <svg class="w-6 h-6" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.8" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </a>
    </section>
  </main>

  <script type="text/javascript">
    const largeImageUrl = "{{asset('images/am.webp')}}";
    const bodyElement = document.querySelector('body');

    const largeImage = new Image();
    largeImage.src = largeImageUrl;
    largeImage.onload = () => {
        bodyElement.style.backgroundImage = `url(${largeImageUrl})`;
    };
  </script>
</body>

</html>
