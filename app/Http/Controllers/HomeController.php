<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        // echo "hi";die;
        return view('home');
    }
    public function index2()
    {
        return view('home2');
    }

    
    public function accessdenied()
    {
        return view('forbidden');
    }
}
