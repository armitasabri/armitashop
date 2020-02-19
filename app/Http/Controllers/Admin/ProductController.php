<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kala;
use App\Models\images;
use App\Models\category;
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
    
        $all=images::all();
        
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
         $image=new images();
        $kala=new kala();
        $kalaid=$kala->id=$request->get('id');
        $kala->name=$request->get('name');
        $kala->description=$request->get('description');
        $kalaa=$request->get('categoryid');
        $kalac=category::where('categoryname',$kalaa)->first();
        $kala->categoryid=$kalac->id;
        $kala->price=$request->get('price');
        $kala->num=$request->get('num');
        $image->imagename=$request->get('imagename');
        $image->kalaid=$kalaid;
        
        $kala->save();
        $image->save();
        return redirect('kalatables');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function show(kala $kala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function edit(kala $kala)
    {
        //
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
        $user=kala::find($id);
        $kalaid=$user->id=$request->get('id');
        $user->name=$request->get('name');
        $user->description=$request->get('description');
        $categoryid=$request->get('categoryid');
        $cat=category::where('categoryname',$categoryid)->first();
        $user->categoryid=$cat->id;
        $user->price=$request->get('price');
        $user->num=$request->get('num');
        $image=images::where('kalaid',$kalaid)->first();
        // dd($image);
        $image->imagename=$request->get('imagename');
        $image->kalaid=$kalaid;
        $image->save();
        $user->save();
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
  
        $product=images::with('Kala')->where('kalaid',$id)->first();
        // dd($product);
        $allcategory=category::all();

        return view('kala.updatekala')->with('all',$product)->with('allcategory',$allcategory);
      }
}
