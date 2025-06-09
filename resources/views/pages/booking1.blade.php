@extends('pages.navbar')
{{-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\booking1.blade.php --}}
@php
    $isLoggedIn = auth()->check();
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">




     <!-- Progress Bar pero dili makita heeeeeeeeeeeeeeeeeeelp -->
  <div class="max-w-5xl mx-auto my-12">
    <div class="flex items-center justify-center space-x-2">
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-gray-400 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-gray-400"></div>
      <div class="h-1 w-1/5 bg-gray-400 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-gray-400"></div>
    </div>
  </div>   

  
     <!-- Progress Bar pero dili makita heeeeeeeeeeeeeeeeeeelp -->
  <div class="max-w-5xl mx-auto my-12">
    <div class="flex items-center justify-center space-x-2">
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-gray-400 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-gray-400"></div>
      <div class="h-1 w-1/5 bg-gray-400 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-gray-400"></div>
    </div>
  </div>   


    <!-- Date and Guest Filters -->
  <form action="{{ route('booking1') }}" method="GET" class="container mx-auto px-6 mt-6 space-y-4" id="filterForm">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="flex items-center border px-4 py-2 rounded-md w-full bg-white">
            <svg class="w-5 h-5 text-gray-400 mr-2" ...></svg>
            <input type="date" name="checkin" value="{{ $checkin ?? '' }}" class="border-none focus:ring-0 w-full" required onchange="this.form.submit()">
        </div>
        <div class="flex items-center border px-4 py-2 rounded-md w-full bg-white">
            <svg class="w-5 h-5 text-gray-400 mr-2" ...></svg>
            <input type="date" name="checkout" value="{{ $checkout ?? '' }}" class="border-none focus:ring-0 w-full" required onchange="this.form.submit()">
        </div>
        <div class="flex items-center border px-4 py-2 rounded-md w-full bg-white">
            <svg class="w-5 h-5 text-gray-400 mr-2" ...></svg>
            <input type="number" name="guests" min="1" value="{{ $guests ?? 2 }}" class="border-none focus:ring-0 w-full" required onchange="this.form.submit()">
        </div>
    </div>
    <!-- No filter button needed -->
  </form>

    <!-- Room Type & Booking Policy Filters -->
    <div class="flex flex-wrap gap-4 mt-5">
      <!-- Room Type -->
      <div class="ml-20 flex flex-wrap items-center gap-2">
        <label for="room_type_id" class="font-semibold whitespace-nowrap">Room Type:</label>
        <form action="{{ route('booking1') }}" method="GET" class="flex items-center gap-2">
          <input type="hidden" name="checkin" value="{{ $checkin }}">
          <input type="hidden" name="checkout" value="{{ $checkout }}">
          <input type="hidden" name="guests" value="{{ $guests }}">
          <select name="room_type_id" id="room_type_id" class="px-3 py-1 rounded-md border-gray-300">
            <option value="">All</option>
            <option value="1" {{ request('room_type_id') == 1 ? 'selected' : '' }}>Classic</option>
            <option value="2" {{ request('room_type_id') == 2 ? 'selected' : '' }}>Deluxe</option>
            <option value="3" {{ request('room_type_id') == 3 ? 'selected' : '' }}>Premier</option>
            <option value="4" {{ request('room_type_id') == 4 ? 'selected' : '' }}>Suites</option>
          </select>
          <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Filter</button>
        </form>
      </div>

      <!-- Booking Policy -->
      <div class="flex flex-wrap items-center gap-2">
        <label class="font-semibold whitespace-nowrap">Booking Policy:</label>
        <button class="bg-gray-200 px-3 py-1 rounded-md">Refundable</button>
        <button class="bg-gray-200 px-3 py-1 rounded-md">Non-Refundable</button>
      </div>
    </div>
  </div>

  <!-- Hotel Info -->
  <div class="container mx-auto px-6 mt-6 space-y-8 mb-20 ">
    <h2 class="text-xl font-bold mb-4">Marahuyo Resort and Spa</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="border p-4 rounded shadow-sm">
        <h3 class="font-semibold">Standard - 29 Offer(s)</h3>
        <p class="text-sm text-gray-600">Lowest Available</p>
        <p class="font-bold mt-2">From &#8369; 5,000 per night</p>
      </div>
      <div class="border p-4 rounded shadow-sm">
        <h3 class="font-semibold">Packages - 8 Offer(s)</h3>
        <p class="text-sm text-gray-600">Special Savings</p>
        <p class="font-bold mt-2">From &#8369; 7,000  per night</p>
      </div>
    </div>
  </div>


  <!-- Room Listings -->
  <div class="container mx-auto px-6 mt-2 space-y-8 mb-20">
    <!-- Room Card -->
    @foreach($rooms as $room)
    <div class="hover:shadow-lg hover:scale-105 transition duration-300 bg-white rounded-lg shadow p-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mb-6">
        @if($room->image_path)
            <img src="{{ asset($room->image_path) }}" alt="Room {{ $room->room_number }}" class="w-full md:w-1/3 rounded-lg object-cover" />
        @else
            <div class="w-full md:w-1/3 h-48 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center rounded-lg">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
        @endif
        <div class="flex-1">
            <h3 class="text-xl font-bold">Room {{ $room->room_number }}</h3>
            <p class="text-gray-600 mt-2">{{ $room->description }}</p>
            {{-- CLASSIC --}}
            @if ($room->room_type_id == 1)
              <div class="space-y-4">
              <p class="font-medium text-gray-800 mb-2">Room Features:</p>
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
                  <img src="images\shower-svgrepo-com.svg" alt="Shower" class="w-6 h-6 text-cyan-500 inline" />
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

            @elseif ($room->room_type_id == 2)
              <div class="space-y-4">
              <p class="font-medium text-gray-800 mb-2">Room Features:</p>
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

            @elseif ($room->room_type_id == 3)
              <div class="space-y-4">
              <p class="font-medium text-gray-800 mb-2">Room Features:</p>
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
            @elseif($room->room_type_id == 4)
              <div class="space-y-4">
              <p class="font-medium text-gray-800 mb-2">Room Features:</p>
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
                <span title="Luxury king-size bed">
                  <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 17v2M12 5.5V10m-6 7v2m15-2v-4c0-1.6569-1.3431-3-3-3H6c-1.65685 0-3 1.3431-3 3v4h18Zm-2-7V8c0-1.65685-1.3431-3-3-3H8C6.34315 5 5 6.34315 5 8v2h14Z"/>
                  </svg>
                </span>
                <span class="text-gray-700 text-sm">Luxury king-size bed</span>
                </div>
                <!-- Shower -->
                <div class="flex items-center gap-2">
                <span title="Elegant en-suite bathroom with tub">
                  <img src="/images/shower-svgrepo-com.svg" alt="Shower" class="w-6 h-6 text-cyan-500 inline" />
                </span>
                <span class="text-gray-700 text-sm">Elegant en-suite bathroom with tub</span>
                </div>
                <!-- Panoramic views -->
                <div class="flex items-center gap-2">
                <span title="Panoramic beachfront views">
                  <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z" />
                  <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" fill="none"/>
                  </svg>
                </span>
                <span class="text-gray-700 text-sm">Panoramic beachfront views</span>
                </div>
                <!-- Private lounge -->
                <div class="flex items-center gap-2">
                <span title="Private lounge for sunset & stargazing">
                  <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </span>
                <span class="text-gray-700 text-sm">Private lounge for sunset & stargazing</span>
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
                <!-- Jacuzzi -->
                <div class="flex items-center gap-2">
                <span title="Private jacuzzi">
                  <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <ellipse cx="12" cy="12" rx="8" ry="4" stroke="currentColor" stroke-width="1.5" fill="none"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 12v2a8 4 0 0 0 16 0v-2" />
                  </svg>
                </span>
                <span class="text-gray-700 text-sm">Private jacuzzi</span>
                </div>
                <!-- Butler service -->
                <div class="flex items-center gap-2">
                <span title="24-hour butler service">
                  <svg class="w-6 h-6 text-rose-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" fill="none"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
                  </svg>
                </span>
                <span class="text-gray-700 text-sm">24-hour butler service</span>
                </div>
                <!-- Complimentary breakfast -->
                <div class="flex items-center gap-2">
                <span title="Complimentary breakfast">
                  <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.5" fill="none"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l8-8" />
                  </svg>
                </span>
                <span class="text-gray-700 text-sm">Complimentary breakfast</span>
                </div>
              </div>
              </div>
            @else
              <div>No features available for this room.</div>
            @endif

            <p class="text-lg font-semibold mt-4">₱{{ number_format($room->price_per_night, 2) }}/night</p>
        </div>
        {{-- <button class="bg-[#056594] text-white px-4 py-2 rounded-md self-start md:self-center">Book Now</button> --}}
        <button>
          <a href="{{ route('booking2', ['room_id' => $room->id, 'checkin' => $checkin, 'checkout' => $checkout]) }}"
            onclick="return requireLoginForBooking(event);"
            class="bg-[#056594] text-white px-6 py-4 rounded-md self-start md:self-center hover:bg-[#034f73] block text-center">
              Book Now
          </a>
        </button>
    </div>
    @endforeach

  </div>

  {{-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\booking1.blade.php --}}

  <script>
  function requireLoginForBooking(e) {
      var isLoggedIn = @json($isLoggedIn);
      if (!isLoggedIn) {
          alert('Please log in to book a room.');
          if (document.getElementById('loginModal')) {
              document.getElementById('loginModal').classList.remove('hidden');
              document.body.style.overflow = 'hidden';
          }
          e.preventDefault();
          return false;
      }
      return true;
  }
  </script>

</body>

</html>



@extends('pages.footer')