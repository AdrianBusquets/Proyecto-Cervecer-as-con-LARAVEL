<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $beers= Beer::orderBy('brand')->get();
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Auth::check()){
        return view('beers.create');
        } else {
            return redirect()
                    ->route('beers.index')
                    ->with('message', 'Error: Solo los usuarios registrados pueden añadir cervezas')
                    ->with('code', 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        if(Auth::check()){
            $beer= new Beer ();
        $beer->brand = $request->brand;
        $beer->description = $request->description;
        $beer->vol = $request->vol;

        if($request->hasFile('img')){
            $beer->img= Storage::url ($request->file('img')->store('public/beers'));
        }
        $beer->saveOrFail();
        return redirect()->route('beers.index')->with('message', 'Cerveza creada correctamente')->with('code', 0);
            } else {
                return redirect()
                        ->route('beers.index')
                        ->with('message', 'Error: Solo los usuarios registrados pueden añadir cervezas')
                        ->with('code', 500);
            }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Beer $beer)
    {
        //
        return view('beers.show', compact('beer'));
    }
    public function friendly(string $name)
    {
        //
        $beer= Beer::where('brand', $name)->get()->first();
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beer $beer)
    {
        //
        if(Auth::check()){
            return view('beers.edit',compact('beer'));
            } else {
                return redirect()
                        ->route('beers.index')
                        ->with('message', 'Error: Solo los usuarios registrados pueden modificar cervezas')
                        ->with('code', 500);
            }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beer $beer)
    {
        //
        if(Auth::check()){
            $beer->brand= $request->brand;
        $beer->description= $request->description;
        $beer->vol= $request->vol;
        if ($request->hasfile('img')){
            $beer->img= Storage::url($request->file('img')->store('public/beers'));
        }
        $beer->saveOrFail();
        return redirect()->route('beers.index')->with('message', 'Cerveza modificada correctamente')->with('code', 0);
            } else {
                return redirect()
                        ->route('beers.index')
                        ->with('message', 'Error: Solo los usuarios registrados pueden modificar cervezas')
                        ->with('code', 500);
            }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beer $beer)
    {
        //
        if(Auth::check()){
            $beer->deleteOrFail();
            return redirect()->route('beers.index')->with('message', 'Cerveza eliminada correctamente')->with('code', 0);
            } else {
                return redirect()
                        ->route('beers.index')
                        ->with('message', 'Error: Solo los usuarios registrados pueden modificar cervezas')
                        ->with('code', 500);
            }
        
    }
}
