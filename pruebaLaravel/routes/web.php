<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '      <br><a href="'.route('Saludo',['name'=>'JORDI']).'">JORDI</a>';
});
Route::get('blackjack', function () {
    return 'blackjack';
});
Route::get('higuercard', function () {
    return 'higuercard';
});
Route::get('donde-estamos', function () {
    return 'donde estamos';
});

Route::get('greeting/{name}', function(string $name){
    return 'Hola '. $name;
})->name('Saludo');
