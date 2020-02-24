<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;

use App\Models\images;
use App\Models\kala;
use App\Models\basket;
use App\Models\users;
use Illuminate\Support\Facades\Auth;


class ShoppingcartController extends Controller
{
    
    public function index(){
        $basket=basket::all();
        return view('product/shoppingcart')->with('shares',$basket);
    }

    public function addkala($id){
       
        $single=images::with('kala')->find($id);
        $basket= new basket;
       $idofkala=$single->kalaid;
    //    $id = users::find(Auth::id());
       $id = auth()->user()->id;
     
        $basket->kalaid=$idofkala;
        $basket->userid=$id;
        $basket->num=1;
        $basket->save();
        $items=$basket::with('kala.images')->get();
        // $items1=images::with('kala')->get();
        // dd($items1);die;
        $shares = $basket
    ->join('kala', 'kala.id', '=', 'basket.kalaid')
    ->join('images', 'images.kalaid', '=', 'kala.id')
    ->get();
    // dd($shares);die;
        return view('product/shoppingcart',[
            'shares'=>$shares
        ]);
    }
}
