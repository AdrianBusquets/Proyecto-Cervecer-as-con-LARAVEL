<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class currency extends Component
{
    /**
     * Create a new component instance.
     */
    public $amount;
    public $currency;

    public function __construct($amount, $currency)
    {
        //
        $this->amount= $amount;
        $this->currency= $currency;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $decimales= 2;
        $simboloDespues= true;
        $sepDecimal= ',';
        $sepMiles= '.';
        $simbolo= '€';
        if($this->currency == 'USD'){
            $simboloDespues= false;
            $sepDecimal= ',';
            $sepMiles= '.';
            $simbolo= '$';
        }elseif($this->currency == 'CNY'){
            $simboloDespues= true;
            $sepDecimal= ',';
            $sepMiles= '.';
            $simbolo= '¥';
        }elseif($this->currency == 'GBP'){
            $simboloDespues= false;
            $sepDecimal= ',';
            $sepMiles= '.';
            $simbolo= '£';
        }elseif($this->currency == 'JPY'){
            $simboloDespues= true;
            $sepDecimal= ',';
            $sepMiles= '.';
            $simbolo= '¥';
        }
        $data= number_format($this->amount, $decimales, $sepDecimal, $sepMiles);
        if($simboloDespues == true){
            $data .= $simbolo;
        }else{
            $data= $simbolo . $data;
        }
        return view('components.currency', compact('data'));
    }
}
