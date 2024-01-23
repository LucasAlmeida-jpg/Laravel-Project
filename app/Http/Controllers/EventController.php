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

    public function create(){
        return view('events/create');
    }

    public function store(Request $request) {

    $event = new Event;

    $event->title = $request->title;
    $event->city = $request->city;
    $event->private = $request->private;
    $event->description = $request->description;

    //image upload
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
        $request->image->move(public_path('img/events'), $imageName);
    
        // Use the assignment operator (=) to set the value of the image property
        $event->image = $imageName;
    }
    

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }

}
