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
  <style>
      input[type="date"].custom-date {
          color: black;
          background-color: white;
      }
  </style>
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
          <img src="{{ asset($room->image_path) }}" class="h-48 w-full object-cover rounded-lg"
            alt="Room {{ $room->room_number }}">
          <div class="col-span-2 space-y-2">
            <h3 class="text-xl font-bold">Room {{ $room->room_number }}</h3>
            <p class="text-gray-600">{{ $room->description }}</p>
            <div class="space-y-1 mt-4">
              <p class="text-md">₱{{ number_format($room->price_per_night, 2) }}/night</p>
              <p class="text-md" id="summaryCheckin">Check-in: {{ date('F j, Y', strtotime($checkin)) }}</p>
              <p class="text-md" id="summaryCheckout">Check-out: {{ date('F j, Y', strtotime($checkout)) }}</p>
              <p class="text-md" id="summaryNights">Nights: {{ $nights }}</p>
            </div>
          </div>
        </div>
      </div>


      <!-- Guest Information Form -->
      <form action="{{ route('finalizeBooking') }}" method="POST" class="bg-white space-y-4 p-6 rounded-lg shadow "
        onsubmit="return checkDatesSet();">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <input type="hidden" name="total_cost" id="inputTotalCost" value="{{ $total_cost }}">
        <input type="hidden" name="guests" value="{{ $guests }}">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Check-in Date</label>
            <input type="date" id="checkinField" name="checkin" value="{{ $checkin }}" onchange="recalculateCharges()" class="custom-date w-full border border-gray-300 px-3 py-2 rounded bg-white" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Check-out Date</label>
            <input type="date" id="checkoutField" name="checkout" value="{{ $checkout }}" onchange="recalculateCharges()" class="custom-date w-full border border-gray-300 px-3 py-2 rounded bg-white" />
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
              <h2 id="summaryRoomCharges">₱{{ number_format($room_charge, 2) }}</h2>
            </div>
            <div class="flex justify-between my-1">
              <h2>Service Charge and Tax:</h2>
              <h2 id="summaryServiceCharges">₱{{ number_format($service_charge, 2) }}</h2>
            </div>
          </div>
        </div>
        <div class="space-y-1 mt-3">
          <div class="bg-grayy px-4 py-5 rounded-md">
            <div class="flex justify-between">
              <h2 class="mt-1 mb-4 font-semibold">Total Charges to Pay</h2>
              <h3 class="pt-5 font-bold text-lg" id="summaryTotalCharges">₱{{ number_format($total_cost, 2) }}</h3>
            </div>
            <button id="VBbtn" type="button" class="text-navblue text-sm underline focus:outline-none">View Breakdown</button>
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
        <p class="text-md" id="breakdownNights">Nights: {{ $nights }}</p>
      </div>

      <div class="my-4">
        <div class="flex justify-between py-2">
          <span class="text-gray-600">Room Charges</span>
          <span id="breakdownRoomCharges">₱{{ number_format($room_charge, 2) }}</span>
        </div>
        <div class="flex justify-between py-2">
          <span class="text-gray-600">Extra Charges</span>
          <span>₱ 0</span>
        </div>
        <div class="flex justify-between py-2">
          <span class="text-gray-600">Service Charge and Tax</span>
          <span id="breakdownServiceCharges">₱{{ number_format($service_charge, 2) }}</span>
        </div>
      </div>

      <div class="border-t border-gray-200 pt-4 mb-4">
        <div class="flex justify-between font-bold text-lg">
          <span>Total Charges</span>
          <span id="breakdownTotalCharges">₱{{ number_format($total_cost, 2) }}</span>
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
    // Breakdown overlay logic
    document.addEventListener('DOMContentLoaded', function () {
      const vbBtn = document.getElementById('VBbtn');
      const closeBtn = document.getElementById('closeBreakdownBtn');
      const overlay = document.getElementById('breakdownOverlay');

      if (vbBtn && overlay) {
        vbBtn.addEventListener('click', function () {
          overlay.classList.remove('hidden');
        });
      }

      if (closeBtn && overlay) {
        closeBtn.addEventListener('click', function () {
          overlay.classList.add('hidden');
        });
      }

      if (overlay) {
        overlay.addEventListener('click', function (e) {
          if (e.target === this) {
            this.classList.add('hidden');
          }
        });
      }
    });

    // Prevent booking if check-in or check-out is missing
    function checkDatesSet() {
      var checkin = document.getElementById('checkinField') ? document.getElementById('checkinField').value.trim() : '';
      var checkout = document.getElementById('checkoutField') ? document.getElementById('checkoutField').value.trim() : '';
      console.log('Checkin:', checkin, 'Checkout:', checkout); // Debug line
      if (!checkin || !checkout || checkin === '' || checkout === '') {
        alert('Please select your check-in and check-out dates before booking a room.');
        return false;
      }
      return true;
    }

    function recalculateCharges() {
      const checkinStr = document.getElementById('checkinField').value;
      const checkoutStr = document.getElementById('checkoutField').value;
      
      if (!checkinStr || !checkoutStr) return;

      const checkin = new Date(checkinStr);
      const checkout = new Date(checkoutStr);

      if (checkout <= checkin) {
          alert('Check-out date must be after Check-in date.');
          document.getElementById('checkoutField').value = '';
          return;
      }

      // Calculate nights
      const diffTime = Math.abs(checkout - checkin);
      const nights = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
      
      const pricePerNight = {{ $room->price_per_night }};
      const roomCharges = pricePerNight * nights;
      const serviceCharge = 500 * nights;
      const totalCost = roomCharges + serviceCharge;

      // Formatter for Philippine Peso
      const formatter = new Intl.NumberFormat('en-PH', {
          minimumFractionDigits: 2,
          maximumFractionDigits: 2
      });

      // Update inputs
      document.getElementById('inputTotalCost').value = totalCost;

      // Update Stay Summary texts
      const checkinOptions = { month: 'long', day: 'numeric', year: 'numeric' };
      document.getElementById('summaryCheckin').innerText = 'Check-in: ' + checkin.toLocaleDateString('en-US', checkinOptions);
      document.getElementById('summaryCheckout').innerText = 'Check-out: ' + checkout.toLocaleDateString('en-US', checkinOptions);
      document.getElementById('summaryNights').innerText = 'Nights: ' + nights;

      // Update Charge values
      document.getElementById('summaryRoomCharges').innerText = '₱' + formatter.format(roomCharges);
      document.getElementById('summaryServiceCharges').innerText = '₱' + formatter.format(serviceCharge);
      document.getElementById('summaryTotalCharges').innerText = '₱' + formatter.format(totalCost);

      // Update Breakdown values
      document.getElementById('breakdownNights').innerText = 'Nights: ' + nights;
      document.getElementById('breakdownRoomCharges').innerText = '₱' + formatter.format(roomCharges);
      document.getElementById('breakdownServiceCharges').innerText = '₱' + formatter.format(serviceCharge);
      document.getElementById('breakdownTotalCharges').innerText = '₱' + formatter.format(totalCost);
    }
  </script>
</body>

</html>
@extends('pages.footer')