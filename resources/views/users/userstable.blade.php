
@extends('layouts.app')
@section('content')
<div class="container" >
    <button type="button" style="background-color:skyblue;margin:2px"><a style="text-decoration:none;color:black"  href={{route('myuserstable.create')}} >add</a></button>

</div>
<table class="dir-rtl table bg-white container table-striped table-bordered ">
    <thead>
      <tr>
          <th scope="col">Update or delete</th>
          <th scope="col">user avatar</th>
          <th scope="col">gender</th>
          <th scope="col">mobile</th>
          <th scope="col">email</th>
          <th scope="col">username</th> 
          <th scope="col">name</th>
        <th scope="col">id</th>
       
        
        
        
        
        

      </tr>
    </thead>
    <tbody>
        @foreach ($all as $user)
      <tr>
        <th scope="row"> <button type="button" style="background-color:tomato;margin:2px"><a style="text-decoration:none;color:black" onclick="return confirm('Are you sure?')" href={{'deleteuser/'.$user->id}} >delete</a></button> <button type="button" style="background-color:skyblue;margin:2px"><a style="text-decoration:none;color:black"  href={{'gotoupdateform/'.$user->id}} >update</a></button></th>
      <td>
        @foreach ($user->photos as $p) 
        <img src="app-assets/img/usersavatar/{{$p->path}}" alt="avatars" style="width:40px">
        @endforeach
      </td>
        <td>{{$user->Gender['name']}}</td> 
     <td>{{$user->mobile}}</td>
     <td>{{$user->email}}</td>
      <td>{{$user->username}}</td>
     <td>{{$user->name}}</td>
      <td>{{$user->id}}</td> 
      </tr>
      @endforeach
    </tbody>
    
  </table>





@endsection
    
