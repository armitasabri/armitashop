<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comments;
use App\Models\users;
use App\Models\kala;


class CommentController extends Controller
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
        $all=comments::all();
        // dd($comments);die;
        return view('comments.showcomments',compact(['all']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $users=users::all();
        $kalas=kala::all();
        return view('comments.addcomments')->with('allusers',$users)->with('allkalas',$kalas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment=new comments();
        $comment->id=$request->get('id');
        $namee=$request->get('user_id');
        $user=users::where('name',$namee)->first();
        // dd($namee);
        $comment->user_id=$user->id;
        $kalaa=$request->get('kala_id');
        $kalaid=kala::where('name',$kalaa)->first();
        // dd($kalaa);
        $comment->kala_id=$kalaid['id'];
        $comment->comment=$request->get('comment');
        $comment->save();
        return redirect('commenttable');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {   
         $all=comments::find($id);
        //  dd($all);
        return view('comments.editcomments')->with('all',$all);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment=comments::find($id)->delete();
        return redirect('commenttable');
    }


    public function updatecomment(Request $request)

    {   
        $id=$request->get('id');
        $comment=comments::with('users')->find($id);
      
        $comment->id=$request->get('id');
        $username=$request->get('user_id'); 
        $namee=users::where('name',$username)->first();
        // dd($namee);
     $comment->user_id=$namee->id;
        $kala_name=$request->get('kala_id');
        $kalaa=kala::where('name',$kala_name)->first();
        $comment->kala_id=$kalaa->id;
        $comment->comment=$request->get('comment');
    //    dd($user); 
       $comment->save();
        
        return redirect('commenttable');
    }
}
