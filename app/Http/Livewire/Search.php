<?php

namespace App\Http\Livewire;

use App\Models\Brewery;
use Livewire\Component;
// use App\Http\Livewire\BreweryMap;

class Search extends Component
{
    public $breweries= null;

    public $searchText= '';
    // public $breweryMap= '';
    public function render()
    {
        if($this->searchText == ''){
            $this->breweries = Brewery::orderBy('name')->get();
        }else {
            $this->breweries = Brewery::where('name', 'like', '%' .$this->searchText. '%')->orderBy('name')->get();
        }
        // if($searchText == '') {
        //     foreach($breweries as $brewery) {
        //         echo '<script>';
        //         echo 'L.marker([' . $brewery->latitude . ', ' . $brewery->longitude . ']).addTo(map);';
        //         echo '</script>';
        //     }
        // } else {
        //     foreach($breweries as $brewery) {
        //         if(strpos(strtolower($brewery->name), strtolower($searchText)) !== false) {
        //             echo '<script>';
        //             echo 'L.marker([' . $brewery->latitude . ', ' . $brewery->longitude . ']).addTo(map);';
        //             echo '</script>';
        //         }
        //     }
        // }
        // uso de la función en un objeto de la clase BreweryMap
        // $breweryMap = new BreweryMap('brewery');
        // $breweryMap->generateMap($breweries, $this->searchText);

        return view('livewire.search');
    }
}

//En este caso, la clase BreweryMap tiene una función generateMap que recibe como parámetros un arreglo de cervecerías ($breweries) y un texto de búsqueda ($searchText). Dentro de la función se encarga de generar el código HTML y JavaScript que muestra el mapa con los marcadores de las cervecerías.

//Para usar la función, se crea un objeto de la clase BreweryMap y se llama a la función generateMap pasando los parámetros necesarios ($breweries y $this->searchText, en este caso).

