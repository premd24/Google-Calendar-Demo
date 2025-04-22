<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleCalendarController extends Controller
{
    public function index()
    {
        return view('google-calendar');
    }

    public function genrateEvent(Request $request)
    {
        // code
    }
}
