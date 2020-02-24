
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
         
        {{-- {{dd($product->photos()->path)}} --}}
      <tr>
        <th scope="row">
           <button type="button" style="background-color:tomato;margin:2px">
            <a style="text-decoration:none;color:black" onclick="return confirm('Are you sure?')" href={{'deletekala/'.$product->id}} >delete</a>
          </button> 
          <button type="button" style="background-color:skyblue;margin:2px">
            <a style="text-decoration:none;color:black"  href={{'updatekalatable/'.$product->id}} >update</a>
          </button></th>
        
         
        <td> 
          @foreach ($product->photos as $p) 
          <img src="app-assets/img/product/kalas/{{$p->path}}"  style="width:100px;height:100px"    />
         @endforeach
        </td>
        
          <td>{{$product->num}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->Category['categoryname']}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->name}}</td>
          <td >{{$product->id}}</td>
      </tr>
    
      @endforeach
    </tbody>
    
  </table>





@endsection
    


