<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('pages.landing_page');
    }
    public function getAvailableRooms()
    {
        $rooms = Room::where('availability', true)->get();
        return response()->json($rooms);
    }
    
}
