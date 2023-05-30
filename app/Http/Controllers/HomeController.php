<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $endpoint= 'https://api.chucknorris.io/jokes/';
        $operations='random';
        $parameters= "food,money,travel";
        $response= Http::withoutVerifying()->get($endpoint . $operations . "?category=" . $parameters);
        $responseJson= $response->json();
        $joke= $responseJson['value'];
        return view('home', compact('joke'));
    }
}
