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
        
     <!-- Progress Bar -->
  <div class="max-w-5xl mx-auto my-12">
    <div class="flex items-center justify-center space-x-2">
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500"></div>
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500y"></div>
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
      <div class="h-1 w-1/5 bg-yellow-500 rounded-full"></div>
      <div class="block w-3 h-3 rounded-full bg-yellow-500y"></div>
    </div>
  </div>   


        <div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-8">
            <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <h1 class="text-3xl font-bold text-gray-800">Booking Confirmed!</h1>
            <p class="text-gray-600 mt-2">Thank you for choosing Marahuyo Hotel and Resort</p>
        </div>

        <div class="border-t border-b border-gray-200 py-4 mb-6">
            <p class="text-gray-600">A confirmation email has been sent to {{ $booking->email }}</p>
        </div>

        <div class="space-y-4">
            <h2 class="text-xl font-semibold">Booking Details</h2>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="text-gray-600">Booking Reference</p>
                    <p class="font-semibold">{{ $booking->id }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Guest Name</p>
                    <p class="font-semibold">{{ $booking->first_name }} {{ $booking->last_name }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Check-in</p>
                    <p class="font-semibold">{{ date('F j, Y', strtotime($booking->checkin)) }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Check-out</p>
                    <p class="font-semibold">{{ date('F j, Y', strtotime($booking->checkout)) }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Total Amount</p>
                    <p class="font-semibold">₱{{ number_format($booking->total_cost, 2) }}</p>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('home') }}" 
               class="inline-block bg-navblue text-white px-6 py-2 rounded-md hover:bg-[#025178]">
                Return to Home
            </a>
        </div>
    </div>
</div>

    </body>

</html>



@extends('pages.footer')