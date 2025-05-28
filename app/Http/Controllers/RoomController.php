<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Log;

class RoomController extends Controller
{

    public function available(Request $request)
    {
        // Debug incoming request
        Log::info('Request data:', $request->all());

        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $rooms = (int) $request->input('rooms', 1);
        $guests = (int) $request->input('guests', 1);
    
        if (!$checkin || !$checkout) {
            Log::info('Missing dates');
            return back()->with('error', 'Please select both check-in and check-out dates.');
        }

        // Debug query parameters
        Log::info('Search parameters:', [
            'checkin' => $checkin,
            'checkout' => $checkout,
            'rooms' => $rooms,
            'guests' => $guests
        ]);

        $availableRooms = Room::where('capacity', '>=', $guests)
            ->where('is_available', true)
            ->whereDoesntHave('availabilities', function($query) use ($checkin, $checkout) {
                $query->whereBetween('date', [$checkin, $checkout])
                    ->where('is_available', false);
            })
            ->take($rooms)
            ->get();

        // Debug found rooms
        Log::info('Found rooms:', ['count' => $availableRooms->count()]);
    
        return view('pages.booking1', ['rooms' => $availableRooms]);
    }
}

// This method retrieves available rooms based on the check-in and check-out dates,
// the number of rooms requested, and the number of guests. It filters out rooms that   