<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use App\Models\gender;
use App\Models\Photos;


use Illuminate\Http\Request;

class UserController extends Controller
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
        $all=users::orderBy('id', 'DESC')->with('Gender')->get();
        return view('users/userstable')->with('all',$all);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $genders=gender::all();
        return view('users.addusers')->with('allg',$genders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new users();
        $user->id=$request->get('id');
        $user->name=$request->get('name');
        $user->username=$request->get('username');
        $user->password=$request->get('password');
        $user->email=$request->get('email');
        $user->mobile=$request->get('mobile');
        $usergender=$request->get('gender');
        $g=gender::where('name',$usergender)->first();
        $user->gender=$g->id;
        $fileimage=$request->file('filename');
        if($fileimage){
            $imagename=$fileimage->getClientOriginalName();
            $fileimage->move('app-assets/img/usersavatar',$imagename);
        $user->fileimage=$imagename;
        $user->Photos()->create([
            'path'=>$imagename
        ]);
        $user->save();    
        }else{
            echo "something goes wrong,try again!";
        }
        
        return redirect('myuserstable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $all=users::find($id);
        $genders=gender::all();
        return view('users/updateuserstable')->with('all',$all)->with('allg',$genders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=users::find($id)->delete();
        return redirect('myuserstable');
    }

    public function updateme(Request $request)
    {   $id=$request->get('id');
        $user=users::find($id);
        $user->id=$request->get('id');
        $user->name=$request->post('name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->mobile=$request->get('mobile');
        $usergender=$request->get('gender');
        $g=gender::where('name',$usergender)->first();
        $user->gender=$g->id;
    //    dd($user); 
    $fileimage=$request->file('filename');
    if($fileimage){
        $imagename= $fileimage->getClientOriginalName();
        $fileimage->move('app-assets/img/usersavatar',$imagename);
        $user->fileimage=$imagename;
      $user->Photos()->create([
          'path'=>$imagename
      ]);
        
     $user->save();
    }else{
            echo "try again!";
        }
        return redirect('myuserstable');
    
}
}
