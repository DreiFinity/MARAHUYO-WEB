@extends('pages.navbar')


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
  <div class="container mx-auto px-6 mt-6 space-y-4"> 
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="flex items-center border px-4 py-2 rounded-md w-full bg-white">
        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        <span class="text-gray-700">Check-in: {{ $checkin ?? 'Select date' }}</span>
      </div>
      <div class="flex items-center border px-4 py-2 rounded-md w-full bg-white">
        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        <span class="text-gray-700">Check-out: {{ $checkout ?? 'Select date' }}</span>
      </div>
      <div class="flex items-center border px-4 py-2 rounded-md w-full bg-white">
        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20v-2a4 4 0 00-3-3.87M9 20v-2a4 4 0 013-3.87M7 8a4 4 0 118 0 4 4 0 01-8 0zm12 8a4 4 0 00-3-3.87"/>
        </svg>
        <span class="text-gray-700">Guests: {{ $guests }}</span>
      </div>
    </div>

    <!-- Room Type & Booking Policy Filters -->
    <div class="flex flex-wrap gap-4">
      <!-- Room Type -->
      <div class="flex flex-wrap items-center gap-2">
        <label class="font-semibold whitespace-nowrap">Room Type:</label>
        <button class="bg-gray-200 px-3 py-1 rounded-md">Classic</button>
        <button class="bg-gray-200 px-3 py-1 rounded-md">Deluxe</button>
        <button class="bg-gray-200 px-3 py-1 rounded-md">Premier</button>
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
  <div class="container mx-auto px-6 mt-6 space-y-8 mb-20">
    <!-- Room Card -->
    @foreach($rooms as $room)
    <div class="bg-white rounded-lg shadow p-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mb-6">
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
            <p class="text-lg font-semibold mt-4">₱{{ number_format($room->price_per_night, 2) }}/night</p>
        </div>
        {{-- <button class="bg-[#056594] text-white px-4 py-2 rounded-md self-start md:self-center">Book Now</button> --}}
        <button>
          <a href="{{ route('booking2', ['room_id' => $room->id, 'checkin' => $checkin, 'checkout' => $checkout]) }}"
            class="bg-[#056594] text-white px-4 py-2 rounded-md self-start md:self-center hover:bg-[#034f73]">
            Book Now
          </a>
        </button>
    </div>
    @endforeach

  </div>

</body>

</html>



@extends('pages.footer')