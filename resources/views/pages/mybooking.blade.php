{{-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\mybookings.blade.php --}}
@extends('pages.navbar')

@php
    $user = auth()->user();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Bookings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<div class="max-w-5xl mx-auto my-12">
    <h1 class="text-3xl font-bold mb-8">My Bookings</h1>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    @if($bookings->isEmpty())
        <div class="bg-white p-8 rounded shadow text-center text-gray-500">
            You have no bookings yet.
        </div>
    @else
        <div class="space-y-8">
            @foreach($bookings as $booking)
                <div class="bg-white rounded-lg shadow p-6 flex flex-col md:flex-row gap-6">
                    @if($booking->room && $booking->room->image_path)
                        <img src="{{ asset($booking->room->image_path) }}" alt="Room {{ $booking->room->room_number }}" class="w-full md:w-1/3 rounded-lg object-cover" />
                    @else
                        <div class="w-full md:w-1/3 h-48 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center rounded-lg">
                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif
                    <div class="flex-1">
                        <h2 class="text-xl font-bold mb-2">Room {{ $booking->room->room_number ?? 'N/A' }}</h2>
                        <p class="text-gray-600 mb-2">{{ $booking->room->description ?? 'No description available.' }}</p>
                        <div class="mb-2">
                            <span class="font-semibold">Check-in:</span>
                            {{ \Carbon\Carbon::parse($booking->checkin)->format('F d, Y') }}
                        </div>
                        <div class="mb-2">
                            <span class="font-semibold">Check-out:</span>
                            {{ \Carbon\Carbon::parse($booking->checkout)->format('F d, Y') }}
                        </div>
                        <div class="mb-2">
                            <span class="font-semibold">Guests:</span>
                            {{ $booking->guests }}
                        </div>
                        <div class="mb-2">
                            <span class="font-semibold">Total Price:</span>
                            ₱{{ number_format($booking->total_price, 2) }}
                        </div>
                        <div class="mb-2">
                            <span class="font-semibold">Status:</span>
                            <span class="inline-block px-2 py-1 rounded {{ $booking->status == 'confirmed' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

</body>
</html>

@extends('pages.footer')