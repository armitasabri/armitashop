<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kala;
use App\Models\Tags;

use App\Models\images;
class frontcontroller extends Controller
{
    
    public function index(){
        $product=kala::all();
        // dd($product);die;
        return view('home1')->with('all',$product);
    }


    public function contact(){
        return view('product/contact');
    }

    
    public function tagsearch($id){
      $tags=Tags::findorfail($id);
    //   dd($tags);
      $kala=$tags->kala;
    //   echo '  tags is : '.$tags->name."<br>";
      return view('product.category1')->with('all',$kala)->with('tag',$tags);
  
//    foreach($kala as $item){
//            echo "kala is :" .$item->fileimage."<br>";
//        }
  
    }


}
