<?php

namespace App\Http\Livewire;

use App\Models\Brewery;
use Livewire\Component;

class Search extends Component
{
    public $breweries= null;

    public $searchText= '';
    public function render()
    {
        if($this->searchText == ''){
            $this->breweries = Brewery::orderBy('name')->get();
        }else {
            $this->breweries = Brewery::where('name', 'like', '%' .$this->searchText. '%')->orderBy('name')->get();
        }

        return view('livewire.search');
    }
}
