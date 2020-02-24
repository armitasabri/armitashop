<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kala;
use App\Models\images;
use App\Models\category;
use App\Models\Photos;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
           $this->middleware('roless');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
    
        $all=kala::with('Photos')->get();

        // dd($all);
        return view('kala.kalatable',compact(['all']));
    }


    public function addkala()
    { 
        $allkala=kala::all();
        $allcategory=category::all();
        return view('kala.addkala')->with('allcategory',$allcategory);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $kala=new kala();
        $kala->id=$request->get('id');
        $kala->name=$request->get('name');
        $kala->description=$request->get('description');
        $kalaa=$request->get('categoryid');
        $kalac=category::where('categoryname',$kalaa)->first();
        $kala->categoryid=$kalac->id;
        $kala->price=$request->get('price');
        $kala->num=$request->get('num');
        $files=$request->file('file');
        // dd($files);
        if($files):
            foreach($files as $file):
            $imagename= $file->getClientOriginalName();
            $file->move('app-assets/img/product/kalas',$imagename);
            $kala->fileimage=$imagename;
            $kala->Photos()->create([
            'path'=>$imagename
        ]);
        endforeach;
        
           $kala->save(); 
        endif;
        
        
       
        return redirect('kalatables');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function showss(Request $request){ 
        // echo 'pink';
        $id=$request->get('imagename');
        $all=Photos::where('path',$id)->first();
        // dd($all);
        $kala=kala::where('fileimage',$id)->first();
        if($kala){
             $flag=1;
        }else{
            $flag=0;
        }
        return view('kala.updatepicture')->with('all',$all)->with('flag',$flag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function myupdate(Request $request)
    {
        $id=$request->get('id');
        $kala=kala::find($id);
        $kalaid=$kala->id=$request->get('id');
        $kala->name=$request->get('name');
        $kala->description=$request->get('description');
        $categoryid=$request->get('categoryid');
        $cat=category::where('categoryname',$categoryid)->first();
        $kala->categoryid=$cat->id;
        $kala->price=$request->get('price');
        $kala->num=$request->get('num');
        $image=$kala->fileimage;
        $kala->fileimage=$image;
        $kala->save();
        return redirect('kalatables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=kala::find($id)->delete();
        return redirect('kalatables');
    }

    public function updatekala($id){
  
        $product=kala::find($id);
        // dd($product);
        $allcategory=category::all();

        return view('kala.updatekala')->with('all',$product)->with('allcategory',$allcategory);
      }


      public function updatepic(Request $request){

        $pid=$request->get('id');
        $photo=Photos::find($pid);
        $kid=$photo->imageable_id;
      $path=$photo->path=$request->get('path');
      $photo->save();
      $kala=$request->get('checkkala');
    
      if($kala){
          $kalaitem=kala::where('id',$kid)->first();
      $kala=kala::find($kid);
         $kala->fileimage=$path;
         $kala->save();
      }
      return redirect('kalatables');
      }
}
