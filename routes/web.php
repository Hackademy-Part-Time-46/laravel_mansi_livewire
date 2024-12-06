<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/counter-js', function () {
    return view('counterjs');
});


Route::get('/counter-livewire', function () {
    return view('counterlw');
});
