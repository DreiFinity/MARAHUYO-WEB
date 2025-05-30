@extends('pages.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Suites - Marahuyo Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Playfair+Display+SC:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        h1, .playfair { font-family: 'Playfair Display SC', serif; }
        .ephesis { font-family: 'Ephesis', cursive; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-gray-50">

<section id="rooms" class="mt-24 mb-16 mx-auto max-w-7xl px-6 lg:px-8">
    <h1 class="playfair text-4xl font-bold mb-12 text-gray-900">Our Accommodations</h1>

    <div class="grid gap-12">
        <!-- Classic Room Card -->
        <div class="bg-white shadow-sm rounded-2xl overflow-hidden hover:shadow-md transition-shadow duration-300">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <img class="w-full h-[400px] object-cover" src="/images/classic.png" alt="Classic Room">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl font-semibold mb-4 text-gray-800">Classic</h2>
                        <p class="text-gray-600 mb-6 text-lg">A cozy and comfortable room ideal for solo travelers or couples.</p>
                        <div class="space-y-4">
                            <p class="font-medium text-gray-800">Room Features:</p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Queen-sized bed
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Free Wi-Fi and TV
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Air conditioning and heating
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    En-suite bathroom with shower
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-semibold text-gray-900 mb-4">₱3,500 <span class="text-base font-normal text-gray-600">per night</span></p>
                        <a href="{{ route('booking1', [
                            'room_type_id' => 1, // 1 = Classic, 2 = Deluxe, etc.
                            'checkin' => request('checkin'),
                            'checkout' => request('checkout'),
                            'guests' => request('guests', 2)
                        ]) }}" class="px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-[#90a8b7] transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deluxe Room Card -->
        <div class="bg-white shadow-sm rounded-2xl overflow-hidden hover:shadow-md transition-shadow duration-300">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <img class="w-full h-[400px] object-cover" src="/images/deluxe.png" alt="Deluxe Room">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl font-semibold mb-4 text-gray-800">Deluxe</h2>
                        <p class="text-gray-600 mb-6 text-lg">Upgrade your stay with extra space and refined amenities.</p>
                        <div class="space-y-4">
                            <p class="font-medium text-gray-800">Room Features:</p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    King-size bed or twin beds
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Beachfront or garden views
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Spacious layout with sitting area
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Upgraded bathroom amenities
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Minibar and in-room safe
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-semibold text-gray-900 mb-4">₱5,000 <span class="text-base font-normal text-gray-600">per night</span></p>
                        <a href="{{ route('booking1', [
                            'room_type_id' => 2,
                            'checkin' => request('checkin'),
                            'checkout' => request('checkout'),
                            'guests' => request('guests', 2)
                        ]) }}" class="px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-[#90a8b7] transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premiere Room Card -->
        <div class="bg-white shadow-sm rounded-2xl overflow-hidden hover:shadow-md transition-shadow duration-300">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <img class="w-full h-[400px] object-cover" src="/images/premiere.png" alt="Premiere Room">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl font-semibold mb-4 text-gray-800">Premiere</h2>
                        <p class="text-gray-600 mb-6 text-lg">Our most luxurious offering, the Premiere Room provides an exceptional stay experience.</p>
                        <div class="space-y-4">
                            <p class="font-medium text-gray-800">Room Features:</p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    King-size premium bedding
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Panoramic views
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Marble bathroom with tub
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    Personalized welcome amenities
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-semibold text-gray-900 mb-4">₱8,000 <span class="text-base font-normal text-gray-600">per night</span></p>
                        <a href="{{ route('booking1', [
                            'room_type_id' => 3,
                            'checkin' => request('checkin'),
                            'checkout' => request('checkout'),
                            'guests' => request('guests', 2)
                        ]) }}" class="px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-[#90a8b7] transition-colors duration-300">
                            Book Now
                        </a>-
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-16 px-6 lg:px-8">
    <h2 class="playfair text-3xl font-bold mb-8 text-center">Exclusive Suites</h2>
    <div id="scrollContainer" class="flex gap-8 overflow-x-auto flex-nowrap scroll-smooth scrollbar-hide cursor-grab pb-4">
        <!-- Suite Cards -->
        <div class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300">
            <img src="images/hiraya.png" alt="Hiraya Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Hiraya Veranda Suite</h3>
                <p class="text-gray-200">Unwind in a serene garden-facing retreat with a spacious veranda and tranquil ambiance.</p>
            </div>
        </div>

        <div class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300">
            <img src="images/liwayway.png" alt="Liwayway Beachfront Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Liwayway Beachfront Suite</h3>
                <p class="text-gray-200">
                 Enjoy direct beach access and panoramic ocean views from this spacious suite featuring contemporary <span><br>coastal design, premium amenities, and a private terrace for sunset relaxation.</span> 
                </p>
            </div>
        </div>

        <div class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300">
            <img src="images/cliffside.avif" alt="Alon Cliffside Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Alon Cliffside Suite</h3>
                <p class="text-gray-200">
                  Perched above the coastline, this secluded suite offers sweeping views, elegant interiors, <span><br>and a private lounge for sunset moments and starry nights.</span> 
                </p>
            </div>
        </div>

        <div class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300">
            <img src="images/cliffside.avif" alt="Alon Cliffside Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Alon Cliffside Suite</h3>
                <p class="text-gray-200">
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
