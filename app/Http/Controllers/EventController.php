<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
            $idade = 26;
            $nomes= ["Lucas", "Rapha", "Lolla", "Bremda"];
            return view('welcome', [ 'idade' => $idade, 'nomes' => $nomes]);
        
    }
    
    public function create() {
        return view('events.create');
    }
}
