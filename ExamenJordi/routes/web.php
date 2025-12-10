<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SubjectController;

//RUTA PARA EL INDEX
Route::get('/', IndexController::class)->name('index');
//RUTA PARA LA POLITICA DE PRIVACIDAD
Route::get('privacy', [LegalController::class, 'privacy'])->name('privacy');
//RUTA PARA LAS COOKIES
Route::get('cookies', [LegalController::class, 'cookies'])->name('cookies');
//RUTAS PARA EL CRUD DE LAS ASIGANTURAS, CREATE, SHOW, INDEX, STORE
Route::resource('subject', SubjectController::class);
