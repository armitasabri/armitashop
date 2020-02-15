
@extends('layouts.app')
@section('content')
<div class="container" >
    <button type="button" style="background-color:skyblue;margin:2px"><a style="text-decoration:none;color:black"  href={{route('commenttable.create')}} >add</a></button>

</div>
<table class="dir-rtl table bg-white container table-striped table-bordered ">
    <thead>
      <tr>
          <th scope="col">Update or delete</th>
          
          <th scope="col">comment</th>
          <th scope="col">kala_id</th> 
          <th scope="col">user_id</th>
        <th scope="col">id</th>
       
        
        
        
        
        

      </tr>
    </thead>
    <tbody>
        @foreach ($all as $comment)
      <tr>
    <th scope="row"> <button type="button" style="background-color:tomato;margin:2px"><a style="text-decoration:none;color:black" onclick="return confirm('Are you sure?')" href={{'deletecomment/'.$comment->id}} >delete</a></button> <button type="button" style="background-color:skyblue;margin:2px"><a style="text-decoration:none;color:black"  href={{'gotocommentform/'.$comment->id}} >update</a></button></th>
     <td>{{$comment->comment}}</td>
      <td>{{$comment->kala->name}}</td>
     <td>{{$comment->users->name}}</td>
      <td>{{$comment->id}}</td> 
      </tr>
      @endforeach
    </tbody>
    
  </table>





@endsection
    
