<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('spaces', SpaceController::class);
Route::resource('clients', ClientController::class);
