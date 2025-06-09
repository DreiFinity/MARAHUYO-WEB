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
                           <div class="flex flex-wrap gap-6">
                            <!-- Wifi -->
                            <div class="flex items-center gap-2">
                            <span title="Free Wi-Fi">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                            </svg>
                            </span>
                            <span class="text-gray-700 text-sm">Free Wi-Fi & TV</span>
                            </div>
                            <!-- Bed -->
                            <div class="flex items-center gap-2">
                            <span title="Queen-sized bed">
                            <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 17v2M12 5.5V10m-6 7v2m15-2v-4c0-1.6569-1.3431-3-3-3H6c-1.65685 0-3 1.3431-3 3v4h18Zm-2-7V8c0-1.65685-1.3431-3-3-3H8C6.34315 5 5 6.34315 5 8v2h14Z"/>
                            </svg>
                            </span>
                            <span class="text-gray-700 text-sm">Queen-sized bed</span>
                            </div>
                            <!-- Shower -->
                            <div class="flex items-center gap-2">
                            <span title="En-suite bathroom with shower">
                            <img src="/images/shower-svgrepo-com.svg" alt="Shower" class="w-6 h-6 text-cyan-500 inline" />
                            </span>
                            <span class="text-gray-700 text-sm">En-suite bathroom with shower</span>
                            </div>
                            <!-- Air conditioning -->
                            <div class="flex items-center gap-2">
                            <span title="Air conditioning and heating">
                            <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M6.05 17.95l-1.414 1.414m12.728 0l-1.414-1.414M6.05 6.05L4.636 7.464" />
                            </svg>
                            </span>
                            <span class="text-gray-700 text-sm">Air conditioning & heating</span>
                            </div>
                            <!-- Work desk -->
                            <div class="flex items-center gap-2">
                            <span title="Work desk">
                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <rect x="3" y="10" width="18" height="7" rx="2" stroke="currentColor" stroke-width="1.5" fill="none"/>
                            <rect x="7" y="7" width="10" height="3" rx="1" stroke="currentColor" stroke-width="1.5" fill="none"/>
                            </svg>
                            </span>
                            <span class="text-gray-700 text-sm">Work desk</span>
                            </div>
                            <!-- Complimentary bottled water -->
                            <div class="flex items-center gap-2">
                            <span title="Complimentary bottled water">
                            <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v2m0 0c-2.21 0-4 1.79-4 4v10a4 4 0 008 0V8c0-2.21-1.79-4-4-4z" />
                            </svg>
                            </span>
                            <span class="text-gray-700 text-sm">Complimentary bottled water</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-semibold text-gray-900 mb-4">₱3,500 <span class="text-base font-normal text-gray-600">per night</span></p>
                        <a href="{{ route('booking1', [
                            'room_type_id' => 1, // 1 = Classic, 2 = Deluxe, etc.
                            'checkin' => request('checkin'),
                            'checkout' => request('checkout'),
                            'guests' => request('guests', 2)
                        ]) }}" class="px-8 py-3 bg-[#056594] text-white font-medium rounded-lg hover:bg-[#90a8b7] transition-colors duration-300">
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
                            <div class="flex flex-wrap gap-6">
                                <!-- Wifi -->
                                <div class="flex items-center gap-2">
                                <span title="Free Wi-Fi">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">Free Wi-Fi & TV</span>
                                </div>
                                <!-- Bed -->
                                <div class="flex items-center gap-2">
                                <span title="King-size bed or twin beds">
                                <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 17v2M12 5.5V10m-6 7v2m15-2v-4c0-1.6569-1.3431-3-3-3H6c-1.65685 0-3 1.3431-3 3v4h18Zm-2-7V8c0-1.65685-1.3431-3-3-3H8C6.34315 5 5 6.34315 5 8v2h14Z"/>
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">King-size bed or twin beds</span>
                                </div>
                                <!-- Shower -->
                                <div class="flex items-center gap-2">
                                <span title="Upgraded bathroom amenities">
                                <img src="/images/shower-svgrepo-com.svg" alt="Shower" class="w-6 h-6 text-cyan-500 inline" />
                                </span>
                                <span class="text-gray-700 text-sm">Upgraded bathroom amenities</span>
                                </div>
                                <!-- View -->
                                <div class="flex items-center gap-2">
                                <span title="Beachfront or garden views">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z" />
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">Beachfront or garden views</span>
                                </div>
                                <!-- Minibar -->
                                <div class="flex items-center gap-2">
                                <span title="Minibar and in-room safe">
                                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <rect x="4" y="7" width="16" height="13" rx="2" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                <rect x="8" y="11" width="2" height="2" rx="0.5" fill="currentColor"/>
                                <rect x="14" y="11" width="2" height="2" rx="0.5" fill="currentColor"/>
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">Minibar & in-room safe</span>
                                </div>
                                <!-- Sitting area -->
                                <div class="flex items-center gap-2">
                                <span title="Spacious layout with sitting area">
                                <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <rect x="3" y="13" width="18" height="7" rx="2" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                <rect x="7" y="7" width="10" height="6" rx="2" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">Sitting area</span>
                                </div>
                                <!-- Coffee/tea maker -->
                                <div class="flex items-center gap-2">
                                <span title="Coffee/tea maker">
                                <svg class="w-6 h-6 text-brown-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <ellipse cx="12" cy="8" rx="7" ry="3" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 8v5a7 3 0 0 0 14 0V8" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 10c2 0 2 4 0 4" />
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">Coffee/tea maker</span>
                                </div>
                                <!-- Bathrobe & slippers -->
                                <div class="flex items-center gap-2">
                                <span title="Bathrobe & slippers">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 3v6m8-6v6M4 21h16M4 21V9a4 4 0 014-4h8a4 4 0 014 4v12" />
                                </svg>
                                </span>
                                <span class="text-gray-700 text-sm">Bathrobe & slippers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-semibold text-gray-900 mb-4">₱5,000 <span class="text-base font-normal text-gray-600">per night</span></p>
                        <a href="{{ route('booking1', [
                            'room_type_id' => 2,
                            'checkin' => request('checkin'),
                            'checkout' => request('checkout'),
                            'guests' => request('guests', 2)
                        ]) }}" class="px-8 py-3 bg-[#056594] text-white font-medium rounded-lg hover:bg-[#90a8b7] transition-colors duration-300">
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
                                <div class="flex flex-wrap gap-6">
                                    <!-- Wifi -->
                                    <div class="flex items-center gap-2">
                                    <span title="Free Wi-Fi">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">Free Wi-Fi & TV</span>
                                    </div>
                                    <!-- Bed -->
                                    <div class="flex items-center gap-2">
                                    <span title="King-size premium bedding">
                                    <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 17v2M12 5.5V10m-6 7v2m15-2v-4c0-1.6569-1.3431-3-3-3H6c-1.65685 0-3 1.3431-3 3v4h18Zm-2-7V8c0-1.65685-1.3431-3-3-3H8C6.34315 5 5 6.34315 5 8v2h14Z"/>
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">King-size premium bedding</span>
                                    </div>
                                    <!-- Shower -->
                                    <div class="flex items-center gap-2">
                                    <span title="Marble bathroom with tub">
                                    <img src="/images/shower-svgrepo-com.svg" alt="Shower" class="w-6 h-6 text-cyan-500 inline" />
                                    </span>
                                    <span class="text-gray-700 text-sm">Marble bathroom with tub</span>
                                    </div>
                                    <!-- Panoramic views -->
                                    <div class="flex items-center gap-2">
                                    <span title="Panoramic views">
                                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z" />
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">Panoramic views</span>
                                    </div>
                                    <!-- Welcome amenities -->
                                    <div class="flex items-center gap-2">
                                    <span title="Personalized welcome amenities">
                                    <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">Welcome amenities</span>
                                    </div>
                                    <!-- Private balcony -->
                                    <div class="flex items-center gap-2">
                                    <span title="Private balcony">
                                    <svg class="w-6 h-6 text-lime-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <rect x="5" y="10" width="14" height="7" rx="2" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                    <rect x="8" y="7" width="8" height="3" rx="1" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">Private balcony</span>
                                    </div>
                                    <!-- Nespresso machine -->
                                    <div class="flex items-center gap-2">
                                    <span title="Nespresso machine">
                                    <svg class="w-6 h-6 text-amber-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <ellipse cx="12" cy="8" rx="7" ry="3" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 8v5a7 3 0 0 0 14 0V8" />
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">Nespresso machine</span>
                                    </div>
                                    <!-- Evening turndown service -->
                                    <div class="flex items-center gap-2">
                                    <span title="Evening turndown service">
                                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3" />
                                    </svg>
                                    </span>
                                    <span class="text-gray-700 text-sm">Evening turndown service</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-2xl font-semibold text-gray-900 mb-4">₱8,000 <span class="text-base font-normal text-gray-600">per night</span></p>
                        <a href="{{ route('booking1', [
                            'room_type_id' => 3,
                            'checkin' => request('checkin'),
                            'checkout' => request('checkout'),
                            'guests' => request('guests', 2)
                        ]) }}" class="px-8 py-3 bg-[#056594] text-white font-medium rounded-lg hover:bg-[#90a8b7] transition-colors duration-300">
                            Book Now
                        </a>-
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\rooms.blade.php -->
<section class="my-16 px-6 lg:px-8">
    <h2 class="playfair text-3xl font-bold mb-8 text-center">Exclusive Suites</h2>
    <div id="scrollContainer" class="flex gap-8 overflow-x-auto flex-nowrap scroll-smooth scrollbar-hide cursor-grab pb-4">
        <!-- Suite Card 1 -->
        <a href="{{ route('booking1', ['room_type_id' => 4]) }}" class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300 block">
            <img src="images/hiraya.png" alt="Hiraya Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Hiraya Veranda Suite</h3>
                <p class="text-gray-200">Unwind in a serene garden-facing retreat with a spacious veranda and tranquil ambiance.</p>
            </div>
        </a>

        <!-- Suite Card 2 -->
        <a href="{{ route('booking1', ['room_type_id' => 4]) }}" class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300 block">
            <img src="images/liwayway.png" alt="Liwayway Beachfront Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Liwayway Beachfront Suite</h3>
                <p class="text-gray-200">
                 Enjoy direct beach access and panoramic ocean views from this spacious suite featuring contemporary <span><br>coastal design, premium amenities, and a private terrace for sunset relaxation.</span> 
                </p>
            </div>
        </a>

        <!-- Suite Card 3 -->
        <a href="{{ route('booking1', ['room_type_id' => 4]) }}" class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300 block">
            <img src="images/rooms/suite-room401.jpg" alt="Samal Bliss Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Samal Bliss Suite</h3>
                <p class="text-gray-200">
                Experience the charm of island living in the Boracay Bliss Suite. Inspired by the white sands and turquoise waters of the Philippines’ most iconic beach, this suite features native wood accents, woven rattan decor, and calming coastal tones. A perfect retreat for travelers seeking comfort, elegance, and a taste of tropical paradise.
                </p>
            </div>
        </a>

        <!-- Suite Card 4 -->
        <a href="{{ route('booking1', ['room_type_id' => 4]) }}" class="relative group bg-white rounded-xl overflow-hidden w-[380px] h-[480px] flex-shrink-0 shadow-sm hover:shadow-md transition-all duration-300 block">
            <img src="images/cliffside.avif" alt="Alon Cliffside Suite" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white opacity-0 group-hover:opacity-100 transition-all duration-300 p-8 flex flex-col justify-end">
                <h3 class="text-2xl font-bold mb-3">Alon Cliffside Suite</h3>
                <p class="text-gray-200">
                  Perched above the coastline, this secluded suite offers sweeping views, elegant interiors, <span><br>and a private lounge for sunset moments and starry nights.</span> 
                </p>
            </div>
        </a>
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
