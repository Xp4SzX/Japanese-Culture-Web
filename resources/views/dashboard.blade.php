<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="relative overflow-hidden">

  <!-- sidebar ikon -->
  <aside id="sidebar"
       class="fixed inset-y-0 left-0 w-20 bg-white shadow-lg
              transform -translate-x-full md:translate-x-0
              transition-transform duration-300 z-40">
  <nav class="flex flex-col items-center py-6 space-y-6">
    <!-- gunakan ikon dari public/icons -->
         <a href="/" class="text-gray-500 hover:text-gray-900 mt-7">
      <img src="{{ asset('icons/japanese-gate.png') }}" class="w-6 h-6" alt="home">
    </a>
    <a href="/dashboard" class="text-gray-500 hover:text-gray-900 mt-36">
      <img src="{{ asset('icons/home.png') }}" class="w-6 h-6" alt="home">
    </a>
    <a href="#" class="text-gray-500 hover:text-gray-900 mt-7">
      <img src="{{ asset('icons/cutlery.png') }}" class="w-6 h-6" alt="cutlery">
    </a>
    <a href="#" class="text-gray-500 hover:text-gray-900 mt-7">
      <img src="{{ asset('icons/music.png') }}" class="w-6 h-6" alt="music">
    </a>
    <a href="#" class="text-gray-500 hover:text-gray-900 mt-7">
      <img src="{{ asset('icons/plane.png') }}" class="w-6 h-6" alt="plane">
    </a>

  </aside>

  <!-- overlay untuk mobile -->
  <div id="overlay"
       class="fixed inset-0 bg-black bg-opacity-50 hidden z-30 md:hidden"></div>

  <!-- dekorasi latar belakang -->
  <div class="absolute inset-0 -z-10 pointer-events-none">
    <div class="absolute right-0 bottom-0 w-[700px] h-[550px]
                bg-blue-200 rounded-tl-[300px] top-[300px]"></div>

    <div class="absolute top-[200px] left-[100px] w-20 h-20
                bg-purple-200 rounded-full"></div>

    <img src="/icons/plus.svg"
         class="absolute bottom-[150px] left-[220px] w-6 h-6" alt="">
    <img src="/icons/plus.svg"
         class="absolute bottom-[300px] left-[340px] w-6 h-6 rotate-45" alt="">
    <img src="/icons/circle.svg"
         class="absolute bottom-[400px] left-[420px] w-10 h-10" alt="">
    <img src="/icons/circle.svg"
         class="absolute bottom-[100px] left-[320px] w-10 h-10" alt="">
  </div>

  <!-- konten utama -->
  <section id="main"
           class="relative z-10 flex items-center justify-between px-10
                  max-w-7xl mx-auto min-h-[calc(100vh-80px)]
                  md:ml-20">
    <div class="max-w-xl">
      <h1 class="font-fredoka text-6xl font-bold leading-tight mt-30">
        Japanese culture
      </h1>
      <p class="mt-4 text-gray-500 text-lg">
        Discover the beauty and richness of Japanese culture, from its timeless
        traditions and elegance.
      </p>
      <button class="bg-sky-100 hover:bg-sky-200 mt-6 px-6 py-3
                     border border-sky-200 rounded-lg transition
                     shadow-sm hover:shadow-md">
        Get Started
      </button>
    </div>

    <div>
      <img src="{{ asset('img/anime.png') }}" class="w-[320px] top-[150px] relative">
    </div>
  </section>

</body>
</html>