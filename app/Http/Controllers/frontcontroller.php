<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kala;
use App\Models\images;
class frontcontroller extends Controller
{
    
    public function index(){
        $product=Images::with('Kala')->get();
        // dd($product);die;
        return view('home1')->with('all',$product);
    }


    public function contact(){
        return view('product/contact');
    }
}
