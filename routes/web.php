<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $beweries=[
        ["nombre"=>"Uceda", "poblacion"=>"(Madrid)"],
        ["nombre"=>"Dunn\´s", "poblacion"=>"(Barcelona)"],
        ["nombre"=>"Triana", "poblacion"=>"(Sevilla)"],
        ["nombre"=>"Moraima", "poblacion"=>"(Madrid)"],
        ["nombre"=>"Yunque", "poblacion"=>"(Ponferrada)"],
    ];
    return view('home', ["breweries"=> $beweries]) ."\n";
})->name('home');
