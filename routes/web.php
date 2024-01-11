<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function() {
    
    $idade = 26;
    $nomes= ["Lucas", "Rapha", "Lolla", "Bremda"];
    return view('welcome', [ 'idade' => $idade, 'nomes' => $nomes]);
});


Route::get('products', function(){
    return view('products');
});