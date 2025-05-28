@extends('pages.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap');
    </style>

    <style>

      

      
      h1, .playfair {
        font-family: 'Playfair Display SC', serif;
      }

      .ephesis {
        font-family: 'Ephesis', cursive;
      }
      
      
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }
      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }

    </style>

    <!-- <link rel="stylesheet" href="fonts.css"> -->
    <link href="./output.css" rel="stylesheet">
    <link href="resources/css/fonts.css" rel="stylesheet">
</head>
<body class="">

 
<section id="rooms" class="mt-32 mx-5 md:mx-20">
  <h1 class="playfair-display-sc-regular font-bold text-3xl mb-8">Rooms</h1>

  <div class="grid gap-10">
    
    <!-- Classic Room Card -->
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col md:flex-row gap-6">
      <div class="md:w-1/2">
        <img class="w-full h-full object-cover rounded-lg" src="/images/classic.png" alt="Classic Room">
      </div>
      <div class="md:w-1/2 flex flex-col justify-between">
        <h2 class="text-2xl font-semibold mb-2">Classic</h2>
        <p class="mb-4">A cozy and comfortable room ideal for solo travelers or couples.</p>
        <p class="font-medium mb-2">Includes:</p>
        <ul class="list-disc list-inside mb-6 space-y-2">
          <li>Queen-sized bed</li>
          <li>Free Wi-Fi and TV</li>
          <li>Air conditioning and heating</li>
          <li>En-suite bathroom with shower</li>
        </ul>
        <button class="self-start px-6 py-3 bg-[#ADC2D2] text-white font-medium rounded-md hover:bg-[#90a8b7] transition">Book Now</button>
      </div>
    </div>

    <!-- Deluxe Room Card -->
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col md:flex-row gap-6">
      <div class="md:w-1/2">
        <img class="w-full h-full object-cover rounded-lg" src="/images/deluxe.png" alt="Deluxe Room">
      </div>
      <div class="md:w-1/2 flex flex-col justify-between">
        <h2 class="text-2xl font-semibold mb-2">Deluxe</h2>
        <p class="mb-4">Upgrade your stay with extra space and refined amenities.</p>
        <p class="font-medium mb-2">Includes:</p>
        <ul class="list-disc list-inside mb-6 space-y-2">
          <li>King-size bed or twin beds</li>
          <li>Beachfront or garden views</li>
          <li>Spacious layout with sitting area</li>
          <li>Upgraded bathroom amenities</li>
          <li>Minibar and in-room safe</li>
        </ul>
        <button class="self-start px-6 py-3 bg-[#ADC2D2] text-white font-medium rounded-md hover:bg-[#90a8b7] transition">Book Now</button>
      </div>
    </div>

    <!-- Premiere Room Card -->
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col md:flex-row gap-6">
      <div class="md:w-1/2">
        <img class="w-full h-full object-cover rounded-lg" src="/images/premiere.png" alt="Premiere Room">
      </div>
      <div class="md:w-1/2 flex flex-col justify-between">
        <h2 class="text-2xl font-semibold mb-2">Premiere</h2>
        <p class="mb-4">Our most luxurious offering, the Premiere Room provides an exceptional stay experience.</p>
        <p class="font-medium mb-2">Includes:</p>
        <ul class="list-disc list-inside mb-6 space-y-2">
          <li>King-size premium bedding</li>
          <li>Panoramic views</li>
          <li>Marble bathroom with tub</li>
          <li>Personalized welcome amenities</li>
        </ul>
        <button class="self-start px-6 py-3 bg-[#ADC2D2] text-white font-medium rounded-md hover:bg-[#90a8b7] transition">Book Now</button>
      </div>
    </div>

  </div>
</section>

 
 
<section  class="my-10 mx-5">
  <div  id="scrollContainer" class="flex gap-6 overflow-x-auto flex-nowrap whitespace-nowrap scroll-smooth scrollbar-hide cursor-grab active:cursor-grabbing">
    
    <!-- Repeatable Card -->
    <div class="relative group bg-[#EDEDED] shadow-md overflow-hidden w-[320px] md:w-[790px] h-64 flex-shrink-0 rounded-lg">
      <img src="images/hiraya.png" alt="Hiraya Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
      <div class="absolute inset-0 bg-black bg-opacity-60 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-6 flex flex-col justify-center">
        <h1 class="text-2xl font-semibold mb-2">Hiraya Veranda Suite</h1>
        <p class="text-sm md:text-base">
          Unwind in a serene garden-facing retreat with a spacious veranda and tranquil ambiance.
        </p>
      </div>
    </div>

    <div class="relative group bg-[#EDEDED] shadow-md overflow-hidden w-[320px] md:w-[790px] h-64 flex-shrink-0 rounded-lg">
      <img src="images/liwayway.png" alt="Liwayway Beachfront Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
      <div class="absolute inset-0 bg-black bg-opacity-60 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-6 flex flex-col justify-center">
        <h1 class="text-2xl font-semibold mb-2">Liwayway Beachfront Suite</h1>
        <p class="text-sm md:text-base">
         Enjoy direct beach access and panoramic ocean views from this spacious suite featuring contemporary <span><br>coastal design, premium amenities, and a private terrace for sunset relaxation.</span> 
        </p>
      </div>
    </div>

    <div class="relative group bg-[#EDEDED] shadow-md overflow-hidden w-[320px] md:w-[790px] h-64 flex-shrink-0 rounded-lg">
      <img src="images/cliffside.avif" alt="Alon Cliffside Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
      <div class="absolute inset-0 bg-black bg-opacity-60 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-6 flex flex-col justify-center">
        <h1 class="text-2xl font-semibold mb-2">Alon Cliffside Suite</h1>
        <p class="text-sm md:text-base">
          Perched above the coastline, this secluded suite offers sweeping views, elegant interiors, <span><br>and a private lounge for sunset moments and starry nights.</span> 
        </p>
      </div>
    </div>


    <!-- Duplicate this card as needed -->
    
  </div>
</section>

<script>
  const scrollContainer = document.getElementById('scrollContainer');
  let isDown = false;
  let startX;
  let scrollLeft;

  scrollContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    scrollContainer.classList.add('scrolling');
    startX = e.pageX - scrollContainer.offsetLeft;
    scrollLeft = scrollContainer.scrollLeft;
  });

  scrollContainer.addEventListener('mouseleave', () => {
    isDown = false;
    scrollContainer.classList.remove('scrolling');
  });

  scrollContainer.addEventListener('mouseup', () => {
    isDown = false;
    scrollContainer.classList.remove('scrolling');
  });

  scrollContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - scrollContainer.offsetLeft;
    const walk = (x - startX) * 2; // scroll speed
    scrollContainer.scrollLeft = scrollLeft - walk;
  });
</script>



 
 
 
</body>
</html>

@extends('pages.footer')
