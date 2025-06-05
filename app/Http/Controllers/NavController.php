<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{
   public function Landing()
    {
        return view('pages.landing_page');
    }

    public function rooms()
    {
        return view('pages.rooms');
    }

    public function dining()
    {
        return view('pages.dining_page');
    }

    public function contact()
    {
        return view('pages.contact');
    }

   
    public function contactPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // You can process/store/send the message here
        return back()->with('success', 'Your message has been sent!');
    }

}
