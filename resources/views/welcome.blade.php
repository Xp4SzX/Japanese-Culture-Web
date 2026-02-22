<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="relative overflow-hidden">


  <!-- overlay untuk menutup konten saat sidebar mobile dibuka -->
  <div id="overlay"
       class="fixed inset-0 bg-black bg-opacity-50 hidden z-30 md:hidden"></div>

  <!-- nav tetap sama, cuma ditambah tombol hamburger di kiri -->
  <nav class="flex items-center justify-between px-10 py-6 max-w-8xl mx-auto">
    <div class="flex items-center">
      <div class="font-bold font-fredoka text-xl">LOGO</div>
    </div>

    <div class="flex gap-12 font-medium">
        <a href="#" class="hover:text-blue-500 transition">HOME</a>
        <a href="#" class="hover:text-blue-500 transition">ABOUT US</a>
        <a href="#" class="hover:text-blue-500 transition">NEWS</a>
        <a href="#" class="hover:text-blue-500 transition">CONTACT</a>
    </div>
  </nav>

  <!-- dekorasi background berada di layer paling bawah -->
  <div class="absolute inset-0 -z-10 pointer-events-none">
    <div class="absolute right-0 bottom-0 w-[600px] h-[450px]
                bg-blue-200 rounded-tl-[300px]"></div>

    <div class="absolute top-[200px] left-[80px] w-20 h-20
                bg-purple-200 rounded-full"></div>

    <img src="/icons/plus.svg"
         class="absolute bottom-[150px] left-[200px] w-6 h-6" alt="">
    <img src="/icons/plus.svg"
         class="absolute bottom-[300px] left-[320px] w-6 h-6 rotate-45" alt="">
    <img src="/icons/circle.svg"
         class="absolute bottom-[100px] left-[400px] w-10 h-10" alt="">
    <img src="/icons/circle.svg"
         class="absolute bottom-[400px] left-[300px] w-10 h-10" alt="">
  </div>

  
  <!-- Main Content -->
  <section
      class="relative z-10 flex items-center justify-start
             max-w-7xl mx-auto min-h-[calc(100vh-80px)]">
    <div class="max-w-xl text-left">
      <h1 class="font-fredoka text-6xl font-bold leading-tight mr-10 ">
        Japanese culture
      </h1>
      <p class="mt-4 text-gray-500 text-lg">
        Discover the beauty and richness of Japanese culture, from its timeless
        traditions and elegance.
      </p>
      <button onclick="window.location.href='/dashboard'" class="bg-sky-100 hover:bg-sky-200 mt-6 px-6 py-3
                     border border-sky-200 rounded-lg transition
                     shadow-sm hover:shadow-md">
        Get Started
      </button>
    </div>

    <div>
      <img src="{{ asset('img/anime.png') }}" class="w-[370px] top-[30px] left-[300px] relative">
    </div>
  </section>

 
</body>
</html>