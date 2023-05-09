<?php

use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;
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
    $breweries=[
        ["id"=>1, "nombre"=>"Cervezas Uceda", "poblacion"=>"(Madrid)", "imagen"=> asset('img/cervezas_uceda.jpg')],
        ["id"=>2, "nombre"=>"Dunne\´s Irish Pub", "poblacion"=>"(Barcelona)", "imagen"=> asset('img/dunne´s.jpg')],
        ["id"=>3, "nombre"=>"Triana", "poblacion"=>"(Sevilla)", "imagen"=> asset('img/triana.jpg')],
        ["id"=>4, "nombre"=>"Moraima", "poblacion"=>"(Madrid)", "imagen"=> asset('img/moraima.jpg')],
        ["id"=>5, "nombre"=>"Yunque", "poblacion"=>"(Ponferrada)", "imagen"=> asset('img/Yunque.jpg')],
        ["id"=>6, "nombre"=>"Pub The Irish Corner", "poblacion"=>"(Madrid)", "imagen"=> asset('img/pub_irish_corner.jpg')],
    ];
    return view('home', ["breweries"=> $breweries]) ."\n";
})->name('home');


Route::get('/cervecerias', [BreweryController::class,'list'])->name('breweries');


Route::get('/cervecerias/{id}', [BreweryController::class, 'details'])->name('brewery');


Route::get ('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::post ('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/about', function () {
    return view ('about');
})->name('about');

