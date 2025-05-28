@extends('pages.navbar')
@extends('layouts.app')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=m-50>
  <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
    @foreach($rooms as $room)
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
        <div class="relative overflow-hidden">
            @if($room->image_path)
                <img src="{{ asset($room->image_path) }}" alt="Room {{ $room->room_number }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            @else
                <div class="w-full h-64 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            @endif
            <div class="absolute top-4 right-4">
                <span class="bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                    Room {{ $room->room_number }}
                </span>
            </div>
        </div>
        
        <div class="p-6">
            <h3 class="font-bold text-2xl text-gray-800 mb-3">Room {{ $room->room_number }}</h3>
            <p class="text-gray-600 leading-relaxed line-clamp-3">{{ $room->description }}</p>
            <div class="flex items-center justify-between mt-4">
                <span class="text-gray-500 font-medium">Price per night</span>
                <span class="text-2xl font-bold text-gray-800">₱{{ number_format($room->price_per_night, 2) }}</span>
            </div>
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-blue-300/50">
                Book Now
            </button>
        </div>
    </div>
    @endforeach
</div>
    
</body>
</html>