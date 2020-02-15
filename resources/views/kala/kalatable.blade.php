
@extends('layouts.app')
@section('content')
<div class="container" >
    <button type="button" style="background-color:skyblue;margin:2px"><a style="text-decoration:none;color:black"  href={{'addkalatable'}} >add</a></button>

</div>
<table class=" table bg-white container table-striped table-bordered ">
    <thead>
      <tr> 
        <th scope="col">Update or delete</th>
        <th scope="col" >pic</th>
        <th scope="col" >num</th>
        <th scope="col">price</th>
        <th scope="col">categoryid</th>
        <th scope="col">description</th>
        <th scope="col">name</th>
        <th scope="col">id</th>
        

      </tr>
    </thead>
    <tbody>
        @foreach ($all as $product)
      <tr>
        <th scope="row">
           <button type="button" style="background-color:tomato;margin:2px">
            <a style="text-decoration:none;color:black" onclick="return confirm('Are you sure?')" href={{'deletekala/'.$product->kala->id}} >delete</a>
          </button> 
          <button type="button" style="background-color:skyblue;margin:2px">
            <a style="text-decoration:none;color:black"  href={{'updatekalatable/'.$product->kala->id}} >update</a>
          </button></th>
          <td>{{$product->imagename}}</td>
          <td>{{$product->kala->num}}</td>
          <td>{{$product->kala->price}}</td>
          <td>{{$product->kala->Category['categoryname']}}</td>
          <td>{{$product->kala->description}}</td>
          <td>{{$product->kala->name}}</td>
          <td >{{$product->kala->id}}</td>
      </tr>
      @endforeach
    </tbody>
    
  </table>





@endsection
    


