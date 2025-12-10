<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');


Route::get('/dondeEstamos', function(){
    return view('whereAreWe');
})->name('whereAreWe');

Route::get('privacyPolice',[LegalController::class, 'privacyPolice'])->name('privacyPolice');
Route::get('termsCondition',[LegalController::class, 'termsCondition'])->name('termsCondition');
Route::resource('players', PlayerController::class);
Route::resource('events', EventController::class);
Route::resource('messages', MessageController::class);
