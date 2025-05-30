@extends('pages.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Confirmation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Progress Bar -->
    <div class="max-w-4xl mx-auto mt-8 mb-12">
        <div class="flex items-center justify-center space-x-3">
            <div class="block w-4 h-4 rounded-full bg-yellow-500"></div>
            <div class="h-1 w-24 bg-yellow-500 rounded-full"></div>
            <div class="block w-4 h-4 rounded-full bg-yellow-500"></div>
            <div class="h-1 w-24 bg-yellow-500 rounded-full"></div>
            <div class="block w-4 h-4 rounded-full bg-yellow-500"></div>
            <div class="h-1 w-24 bg-yellow-500 rounded-full"></div>
            <div class="block w-4 h-4 rounded-full bg-yellow-500"></div>
        </div>
    </div>   

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-10">
                    <div class="bg-green-100 w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-900">Booking Confirmed!</h1>
                    <p class="text-gray-600 mt-3">Thank you for choosing Marahuyo Hotel and Resort</p>
                </div>

                <div class="border-t border-b border-gray-100 py-6 mb-8">
                    <p class="text-gray-600 text-center">A confirmation email has been sent to <span class="font-medium">{{ $booking->email }}</span></p>
                </div>

                <div class="space-y-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Booking Details</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-500 text-sm">Booking Reference</p>
                            <p class="font-semibold text-gray-900 mt-1">{{ $booking->id }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-500 text-sm">Guest Name</p>
                            <p class="font-semibold text-gray-900 mt-1">{{ $booking->first_name }} {{ $booking->last_name }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-500 text-sm">Check-in</p>
                            <p class="font-semibold text-gray-900 mt-1">{{ date('F j, Y', strtotime($booking->checkin)) }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-500 text-sm">Check-out</p>
                            <p class="font-semibold text-gray-900 mt-1">{{ date('F j, Y', strtotime($booking->checkout)) }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg col-span-2">
                            <p class="text-gray-500 text-sm">Total Amount</p>
                            <p class="font-semibold text-gray-900 mt-1">₱{{ number_format($booking->total_cost, 2) }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 text-center">
                    <a href="{{ route('home') }}" 
                       class="inline-block bg-navblue text-white px-8 py-3 rounded-lg hover:bg-[#025178] transition duration-200">
                        Return to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@extends('pages.footer')