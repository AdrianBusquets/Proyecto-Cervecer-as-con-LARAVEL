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


Route::get('/cervecerias', function(){
    $breweries=[
        ["id"=>1, "nombre"=>"Cervezas Uceda", "poblacion"=>"(Madrid)", "imagen"=> asset('img/cervezas_uceda.jpg')],
        ["id"=>2, "nombre"=>"Dunne\´s Irish Pub", "poblacion"=>"(Barcelona)", "imagen"=> asset('img/dunne´s.jpg')],
        ["id"=>3, "nombre"=>"Triana", "poblacion"=>"(Sevilla)", "imagen"=> asset('img/triana.jpg')],
        ["id"=>4, "nombre"=>"Moraima", "poblacion"=>"(Madrid)", "imagen"=> asset('img/moraima.jpg')],
        ["id"=>5, "nombre"=>"Yunque", "poblacion"=>"(Ponferrada)", "imagen"=> asset('img/Yunque.jpg')],
        ["id"=>6, "nombre"=>"Pub The Irish Corner", "poblacion"=>"(Madrid)", "imagen"=> asset('img/pub_irish_corner.jpg')],
    ];

    return view ('breweries', ['breweries' => $breweries]);
})->name('breweries');


Route::get('/cervecerias/{id}', function($id){
    $breweries=[
        ["id"=>1, "nombre"=>"Cervezas Uceda", "poblacion"=>"(Madrid)", "imagen"=> asset('img/cervezas_uceda.jpg')],
        ["id"=>2, "nombre"=>"Dunne\´s Irish Pub", "poblacion"=>"(Barcelona)", "imagen"=> asset('img/dunne´s.jpg')],
        ["id"=>3, "nombre"=>"Triana", "poblacion"=>"(Sevilla)", "imagen"=> asset('img/triana.jpg')],
        ["id"=>4, "nombre"=>"Moraima", "poblacion"=>"(Madrid)", "imagen"=> asset('img/moraima.jpg')],
        ["id"=>5, "nombre"=>"Yunque", "poblacion"=>"(Ponferrada)", "imagen"=> asset('img/Yunque.jpg')],
        ["id"=>6, "nombre"=>"Pub The Irish Corner", "poblacion"=>"(Madrid)", "imagen"=> asset('img/pub_irish_corner.jpg')],
    ];

    $brewery = null;
    $i= 0;
    while (($i < count($breweries) && ($brewery == null))){
        if ($id == $breweries [$i]['id']){
            $brewery = $breweries[$i];
        }
        $i++;
    }
    return view ('brewery', ['brewery'=> $brewery]);
})->name('brewery');


Route::get('/about', function () {
    return view ('about');
})->name('about');