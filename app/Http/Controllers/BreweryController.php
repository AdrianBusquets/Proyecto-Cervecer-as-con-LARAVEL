<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RuntimeException;

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
    // public static $breweries=[
    //     ["id"=>1, "nombre"=>"Cervezas Uceda", "poblacion"=>"(Madrid)", "imagen"=> 'img/cervezas_uceda.jpg', "latitud"=> 40.4203685, "longitud"=> -3.6166822,17],
    //     ["id"=>2, "nombre"=>"Dunne's Irish Pub", "poblacion"=>"(Barcelona)", "imagen"=> 'img/dunnes.jpg', "latitud"=> 41.3836505, "longitud"=> 2.1762596,17],
    //     ["id"=>3, "nombre"=>"Triana", "poblacion"=>"(Sevilla)", "imagen"=> 'img/triana.jpg', "latitud"=> 37.385091, "longitud"=> -6.0182199,16],
    //     ["id"=>4, "nombre"=>"Moraima", "poblacion"=>"(Madrid)", "imagen"=> 'img/moraima.jpg', "latitud"=> 40.4104291, "longitud"=> -3.6596985,17],
    //     ["id"=>5, "nombre"=>"Yunque", "poblacion"=>"(Ponferrada)", "imagen"=> 'img/Yunque.jpg', "latitud"=> 42.5569463, "longitud"=> -6.6122162,17],
    //     ["id"=>6, "nombre"=>"Pub The Irish Corner", "poblacion"=>"(Madrid)", "imagen"=> 'img/pub_irish_corner.jpg', "latitud"=> 40.4386574, "longitud"=> -3.6406566,17],
    // ];
    public function index(){
        $breweries = DB::table('breweries')->get();
        return view ('breweries.index', ['breweries' => $breweries]);
    }

    public function show($id){
        // $brewery = null;
        // $i= 0;
        // while (($i < count(self::$breweries) && ($brewery == null))){
        //     if ($id == self::$breweries [$i]['id']){
        //         $brewery = self::$breweries[$i];
        //     }
        //     $i++;
        // }
        $brewery = DB::table('breweries')->find($id);
        return view ('breweries.show', compact('brewery'));
    }

    public function create(){
        return view('breweries.create');
    }

    public function store(Request $request){
        $name= $request->name;
        $description= $request->description;
        $place= $request->place;
        $latitude= $request->latitude;
        $longitude= $request->longitude;

        try {
            DB::table('breweries')->insert([
                'name'=> $name,
                'place'=> $place,
                'description'=> $description,
                'latitude'=> $latitude,
                'longitude'=> $longitude
            ]);
        } catch (RuntimeException $a) {
            return back()-> route('breweries')->with('message', 'Los datos indicados no son correctos')->with('code', 200);
        }

        return redirect()-> route('breweries')->with('message', 'Cervería agregada correctamente')->with('code', 0);
    }

    public function edit($id){
        $brewery = DB::table('breweries')->find($id);
        return view('breweries.edit', compact('brewery'));
    }

    public function update(Request $request, $id){
        // $id= $request->id;
        $name= $request->name;
        $place= $request->place;
        $description=  $request->description;
        $latitude= $request->latitude;
        $longitude= $request->longitude;

        try {
            DB::table('breweries')->where('id', $id)->update([
                'name'=> $name,
                'place'=> $place,
                'description'=> $description,
                'latitude'=> $latitude,
                'longitude'=> $longitude
            ]);
        } catch (RuntimeException $a) {
            return back()->with('message', 'Los datos indicados no son correctos')->with('code', 200);
        }

        return redirect()-> route('breweries')->with('message', 'Cervería modificada correctamente')->with('code', 0);
    }

    
}
