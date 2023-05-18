<?php

namespace App\Http\Controllers;

use App\Http\Requests\BreweryRequest;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
    public function index(){
        $breweries = Brewery::orderBy('name')->get();
        return view ('breweries.index', ['breweries' => $breweries]);
    }

    // public function indexQB(){
    //     $breweries = DB::table('breweries')->get();
    //     return view ('breweries.index', ['breweries' => $breweries]);
    // }

    public function show(Brewery $brewery){
        return view ('breweries.show', compact('brewery'));
    }

    // public function showQB($id){
    //     $brewery = DB::table('breweries')->find($id);
    //     return view ('breweries.show', compact('brewery'));
    // }

    public function create(){
        return view('breweries.create');
    }

    public function store(BreweryRequest $request){
        // $name= $request->name;
        // $description= $request->description;
        // $place= $request->place;
        // $latitude= $request->latitude;
        // $longitude= $request->longitude;

        // $url="";
        // if($request->hasFile('img')){
        // $path= $request->file('img')->store('public/breweries');
        // $url = Storage::url($path);
        // }
        $brewery= new Brewery();
        $brewery->fill($request->validated());
            if($request->hasFile('img')){
            $brewery->img= Storage::url($request->file('img')->store('public/breweries'));
            }

        try {
            // $brewery = Brewery::create([
            //     'name'=> $name,
            //     'place'=> $place,
            //     'description'=> $description,
            //     'latitude'=> $latitude,
            //     'longitude'=> $longitude,
            //     'img'=> $url
            // ]);
            
            
            
            $brewery->saveOrFail();
        } catch (RuntimeException $a) {
            return back()-> route('breweries')->with('message', 'Los datos indicados no son correctos')->with('code', 200);
        }

        return redirect()-> route('breweries')->with('message', 'Cervería agregada correctamente')->with('code', 0);
    }

    // public function storeQB(Request $request){
    //     $name= $request->name;
    //     $description= $request->description;
    //     $place= $request->place;
    //     $latitude= $request->latitude;
    //     $longitude= $request->longitude;

    //     $url="";
    //     if($request->hasFile('img')){
    //     $path= $request->file('img')->store('public/breweries');
    //     $url = Storage::url($path);
    //     }

    //     try {
    //         DB::table('breweries')->insert([
    //             'name'=> $name,
    //             'place'=> $place,
    //             'description'=> $description,
    //             'latitude'=> $latitude,
    //             'longitude'=> $longitude,
    //             'img'=> $url
    //         ]);
    //     } catch (RuntimeException $a) {
    //         return back()-> route('breweries')->with('message', 'Los datos indicados no son correctos')->with('code', 200);
    //     }

    //     return redirect()-> route('breweries')->with('message', 'Cervería agregada correctamente')->with('code', 0);
    // }

    public function edit(Brewery $brewery){
        return view('breweries.edit', compact('brewery'));
    }

    // public function editQB($id){
    //     $brewery = DB::table('breweries')->find($id);
    //     return view('breweries.edit', compact('brewery'));
    // }

    public function update(BreweryRequest $request, Brewery $brewery){
        // $id= $request->id;
        // $name= $request->name;
        // $place= $request->place;
        // $description=  $request->description;
        // $latitude= $request->latitude;
        // $longitude= $request->longitude;

        // $url="";
        // if($request->hasFile('img')){
        // $path= $request->file('img')->store('public/breweries');
        // $url = Storage::url($path);
        // }

        $brewery->fill($request->validated());
            if($request->hasFile('img')){
            $brewery->img= Storage::url($request->file('img')->store('public/breweries'));
            }

        try {
            // $brewery->name= $name;
            // $brewery->place= $place;
            // $brewery->descrption= $description;
            // $brewery->latitude= $latitude;
            // $brewery->longitude= $longitude;
            
            $brewery->saveOrFail();
        } catch (RuntimeException $a) {
            return back()->with('message', 'Los datos indicados no son correctos')->with('code', 200);
        }

        return redirect()-> route('breweries')->with('message', 'Cervería modificada correctamente')->with('code', 0);
    }

    // public function updateQB(Request $request, $id){
    //     // $id= $request->id;
    //     $name= $request->name;
    //     $place= $request->place;
    //     $description=  $request->description;
    //     $latitude= $request->latitude;
    //     $longitude= $request->longitude;

    //     $campos= [
    //         'name'=> $name,
    //         'place'=> $place,
    //         'description'=> $description,
    //         'latitude'=> $latitude,
    //         'longitude'=> $longitude
    //     ];

    //     $url="";
    //     if($request->hasFile('img')){
    //     $path= $request->file('img')->store('public/breweries');
    //     $url = Storage::url($path);
    //     $campos['img']= $url;
    //     }

    //     try {
    //         DB::table('breweries')->where('id', $id)->update($campos);
    //     } catch (RuntimeException $a) {
    //         return back()->with('message', 'Los datos indicados no son correctos')->with('code', 200);
    //     }

    //     return redirect()-> route('breweries')->with('message', 'Cervería modificada correctamente')->with('code', 0);
    // }

    public function delete(Brewery $brewery){
        try{
            $brewery->deleteOrFail();
        }catch (RuntimeException $a) {
            return back()->with('message', 'No ha sido posible eliminar esta cervecería')->with('code', 200);
        }

        return redirect()-> route('breweries')->with('message', 'Cervería eliminada correctamente')->with('code', 0);
    }

    // public function deleteQB($id){
    //     try{
    //         DB::table('breweries')->delete($id);
    //     }catch (RuntimeException $a) {
    //         return back()->with('message', 'No ha sido posible eliminar esta cervecería')->with('code', 200);
    //     }

    //     return redirect()-> route('breweries')->with('message', 'Cervería eliminada correctamente')->with('code', 0);
    // }

    
}
