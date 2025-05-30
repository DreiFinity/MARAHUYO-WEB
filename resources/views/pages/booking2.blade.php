@extends('pages.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'navblue': '#056594',
            'gray': '#C5D6DB',
            'grayy': '#EBEBEB'
          },
          fontFamily: {
            'poppins': ['Poppins', 'serif']
          },
        },
      },
    }
  </script>
</head>
<body>

  <!-- Progress Bar -->
  <div class="max-w-5xl mx-auto my-12">
    <div class="flex items-center justify-center space-x-2">
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-gray rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-gray"></div>
    </div>
  </div>

  <!-- Main Grid Layout -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6 pb-12">

    <!-- Left Column (2/3 width) -->
    <div class="md:col-span-2 space-y-6">

      <!-- Stay Summary -->
      <div class="bg-[#EBEBEB] shadow p-6 rounded-lg">
        <h2 class="text-lg font-semibold mb-4">Stay Summary</h2>
        <div class="grid grid-cols-3 gap-4">
          <img src="{{ asset($room->image_path) }}" class="h-48 w-full object-cover rounded-lg" alt="Room {{ $room->room_number }}">
          <div class="col-span-2 space-y-2">
            <h3 class="text-xl font-bold">Room {{ $room->room_number }}</h3>
            <p class="text-gray-600">{{ $room->description }}</p>
            <div class="space-y-1 mt-4">
              <p class="text-md">₱{{ number_format($room->price_per_night, 2) }}/night</p>
              <p class="text-md">Check-in: {{ date('F j, Y', strtotime($checkin)) }}</p>
              <p class="text-md">Check-out: {{ date('F j, Y', strtotime($checkout)) }}</p>
              <p class="text-md">Nights: {{ $nights }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Guest Information Form -->
      <form action="{{ route('finalizeBooking') }}" method="POST" class="bg-white space-y-4 p-6 rounded-lg shadow">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <input type="hidden" name="checkin" value="{{ $checkin }}">
        <input type="hidden" name="checkout" value="{{ $checkout }}">
        <input type="hidden" name="total_cost" value="{{ $total_cost }}">
        <input type="hidden" name="guests" value="{{ $guests }}">

        <h2 class="text-lg font-semibold mb-4">Guest Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium">First Name*</label>
            <input type="text" name="first_name" required class="w-full border px-3 py-2 rounded" />
          </div>
          <div>
            <label class="block text-sm font-medium">Last Name*</label>
            <input type="text" name="last_name" required class="w-full border px-3 py-2 rounded" />
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-medium">Email*</label>
            <input type="email" name="email" required class="w-full border px-3 py-2 rounded" />
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-medium">Country / Region*</label>
            <input type="text" name="country" required class="w-full border px-3 py-2 rounded" />
          </div>
          <div class="md:col-span-2 flex">
            <input type="text" name="phone_code" placeholder="+63" class="w-24 border rounded-l px-2 py-2 text-sm" />
            <input type="text" name="phone_number" placeholder="Phone Number" required class="w-full border border-l-0 rounded-r px-3 py-2 text-sm" />
          </div>
        </div>

        <button type="submit" class="w-full bg-navblue text-white font-bold py-3 rounded hover:bg-[#025178]">
          BOOK NOW
        </button>
      </form>

    </div>

    <!-- Right Column (1/3 width) -->
    <div class="space-y-4">
      <div class="bg-white shadow p-6 rounded-lg">
        <h2 class="text-lg font-semibold text-center">CHARGES</h2>
        <div class="space-y-2 mt-4">
          <div class="bg-grayy px-4 py-4 rounded-md">
            <div class="flex justify-between my-1">
              <h2>Room Charges:</h2>
              <h2>₱{{ number_format($room_charge, 2) }}</h2>
            </div>
            <div class="flex justify-between my-1">
              <h2>Service Charge and Tax:</h2>
              <h2>₱{{ number_format($service_charge, 2) }}</h2>
            </div>
          </div>
        </div>
        <div class="space-y-1 mt-3">
          <div class="bg-grayy px-4 py-5 rounded-md">
            <div class="flex justify-between">
              <h2 class="mt-1 mb-4 font-semibold">Total Charges to Pay</h2>
              <h3 class="pt-5 font-bold text-lg">₱{{ number_format($total_cost, 2) }}</h3>
            </div>
            <button id="VBbtn" class="text-navblue text-sm underline focus:outline-none">View Breakdown</button>
          </div>
        </div>
        {{-- <button class="w-full bg-navblue text-white font-bold py-3 rounded shadow hover:bg-[#025178]">
          BOOK NOW
        </button> --}}
      </div>
    </div>
  </div>

  <!-- Breakdown Overlay -->
  <div id="breakdownOverlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6 mx-4">
      <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-800">View Breakdown</h2>
        <p class="font-medium text-gray-700 mt-2">Room {{ $room->room_number }} - {{ $guests }} Guests</p>
      </div>

      <div class="flex justify-between items-center py-3 border-b border-gray-200">
        <p class="text-md">Nights: {{ $nights }}</p>
      </div>

      <div class="my-4">
        <div class="flex justify-between py-2">
          <span class="text-gray-600">Room Charges</span>
          <span>₱{{ number_format($room_charge, 2) }}</span>
        </div>
        <div class="flex justify-between py-2">
          <span class="text-gray-600">Extra Charges</span>
          <span>₱ 0</span>
        </div>
        <div class="flex justify-between py-2">
          <span class="text-gray-600">Service Charge and Tax</span>
          <span>₱{{ number_format($service_charge, 2) }}</span>
        </div>
      </div>

      <div class="border-t border-gray-200 pt-4 mb-4">
        <div class="flex justify-between font-bold text-lg">
          <span>Total Charges</span>
          <span>₱{{ number_format($total_cost, 2) }}</span>
        </div>
      </div>

      <div class="mt-6 flex justify-end">
        <button id="closeBreakdownBtn" class="px-4 py-2 bg-navblue text-white rounded-md hover:bg-[#025178]">
          Close
        </button>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('VBbtn').addEventListener('click', function () {
      document.getElementById('breakdownOverlay').classList.remove('hidden');
    });

    document.getElementById('closeBreakdownBtn').addEventListener('click', function () {
      document.getElementById('breakdownOverlay').classList.add('hidden');
    });

    document.getElementById('breakdownOverlay').addEventListener('click', function (e) {
      if (e.target === this) {
        this.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
