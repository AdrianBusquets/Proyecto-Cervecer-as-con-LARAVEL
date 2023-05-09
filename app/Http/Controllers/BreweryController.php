<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Summary of BreweryController
 */
class BreweryController extends Controller
{
    //
    /**
     * Summary of breweries
     * @var array
     */
    public static $breweries=[
        ["id"=>1, "nombre"=>"Cervezas Uceda", "poblacion"=>"(Madrid)", "imagen"=> 'img/cervezas_uceda.jpg', "latitud"=> 40.4203685, "longitud"=> -3.6166822,17],
        ["id"=>2, "nombre"=>"Dunne's Irish Pub", "poblacion"=>"(Barcelona)", "imagen"=> 'img/dunnes.jpg', "latitud"=> 41.3836505, "longitud"=> 2.1762596,17],
        ["id"=>3, "nombre"=>"Triana", "poblacion"=>"(Sevilla)", "imagen"=> 'img/triana.jpg', "latitud"=> 37.385091, "longitud"=> -6.0182199,16],
        ["id"=>4, "nombre"=>"Moraima", "poblacion"=>"(Madrid)", "imagen"=> 'img/moraima.jpg', "latitud"=> 40.4104291, "longitud"=> -3.6596985,17],
        ["id"=>5, "nombre"=>"Yunque", "poblacion"=>"(Ponferrada)", "imagen"=> 'img/Yunque.jpg', "latitud"=> 42.5569463, "longitud"=> -6.6122162,17],
        ["id"=>6, "nombre"=>"Pub The Irish Corner", "poblacion"=>"(Madrid)", "imagen"=> 'img/pub_irish_corner.jpg', "latitud"=> 40.4386574, "longitud"=> -3.6406566,17],
    ];
    public function list(){
        return view ('breweries', ['breweries' => self::$breweries]);
    }

    public function details($id){
        $brewery = null;
        $i= 0;
        while (($i < count(self::$breweries) && ($brewery == null))){
            if ($id == self::$breweries [$i]['id']){
                $brewery = self::$breweries[$i];
            }
            $i++;
        }
        return view ('brewery', ['brewery'=> $brewery]);
    }
}
