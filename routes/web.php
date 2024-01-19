<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);


Route::get('products', function(){
    return view('products');
});

Route::get('produtos', function(){

$busca = request('search');
    return view('products', ['busca' => $busca]);
});


Route::get('/produtos_teste/{id?}', function ($id = 1) {
    return view('products', ['id'=> $id]);
});