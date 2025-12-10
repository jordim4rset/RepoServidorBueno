<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CoockieFaqController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;


Route::get('/', IndexController::class)->name('principal');
Route::resource('actors', ActorController::class);
Route::get('coockies', [CoockieFaqController::class, 'coockie'])->name('cookie');
Route::get('faq',[CoockieFaqController::class, 'faq'])->name('faq');
Route::resource('movies', MovieController::class);
Route::resource('studio', StudioController::class);
Route::resource('animes', AnimeController::class);
Route::resource('character', CharacterController::class);


