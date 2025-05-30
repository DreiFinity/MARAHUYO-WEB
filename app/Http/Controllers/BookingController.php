<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class BookingController extends Controller
{
    public function show(Request $request)
    {
        $room_id = $request->input('room_id');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $guests = (int) $request->input('guests', 2);

        // Fetch the selected room
        $room = Room::findOrFail($room_id);

        // Calculate the number of nights
        $checkin_date = new \DateTime($checkin);
        $checkout_date = new \DateTime($checkout);
        $nights = $checkin_date->diff($checkout_date)->days;
        $service_charge = 500 * $nights;
        $room_charge = $room->price_per_night * $nights;
        // Calculate the total cost
        $total_cost = $room_charge + $service_charge;

        return view('pages.booking2', compact('room', 'checkin', 'checkout', 'nights', 'guests','service_charge','room_charge','total_cost'));
    }
   
    // public function finalize(Request $request)
    // {
    //     // Save booking details to the database (example logic)
    //     $booking = new Booking();
    //     $booking->room_id = $request->input('room_id');
    //     $booking->first_name = $request->input('first_name');
    //     $booking->last_name = $request->input('last_name');
    //     $booking->email = $request->input('email');
    //     $booking->contact_number = $request->input('contact_number');
    //     $booking->checkin = $request->input('checkin');
    //     $booking->checkout = $request->input('checkout');
    //     $booking->total_cost = $request->input('total_cost');
    //     $booking->save();

    //     // Fetch the room details
    //     $room = Room::findOrFail($request->input('room_id'));

    //     // Calculate the number of nights
    //     $checkin_date = new \DateTime($request->input('checkin'));
    //     $checkout_date = new \DateTime($request->input('checkout'));
    //     $nights = $checkin_date->diff($checkout_date)->days;

    //     // Redirect to the confirmation page with booking details
    //     return view('pages.booking3', [
    //         'room' => $room,
    //         'checkin' => $request->input('checkin'),
    //         'checkout' => $request->input('checkout'),
    //         'nights' => $nights,
    //         'total_cost' => $request->input('total_cost'),
    //     ]);
    // }

    public function finalize(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'phone_code' => 'required|string|max:5',
            'phone_number' => 'required|string|max:20',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'guests' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0'
        ]);
    
        // Create the booking
        $booking = Booking::create($validated);
    
        // Update room availability
        $room = Room::find($request->room_id);
        $room->is_available = false;
        $room->save();
    
        // Redirect to confirmation page with booking details
        return redirect()->route('booking3', ['booking_id' => $booking->id]);
    }
    public function showConfirmation($booking_id)
    {
        $booking = \App\Models\Booking::findOrFail($booking_id);
        $room = \App\Models\Room::find($booking->room_id);

        return view('pages.booking3', [
            'booking' => $booking,
            'room' => $room,
        ]);
    }
}