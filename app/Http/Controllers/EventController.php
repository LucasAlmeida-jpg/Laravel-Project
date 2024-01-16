<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;


class Eventcontroller extends Controller
{
    public function index() {
        $events = Event::all();
        return view('/welcome', ["events" => $events]);
    }
}
