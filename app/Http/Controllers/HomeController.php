<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clothes = Product::all()->take(4);
        $clothes_2 = Product::where('gender' , 'Woman')->take(4)->get();
        $clothes_3 = Product::all();
        return view('final' , compact('clothes' , 'clothes_2'));

    }
}
