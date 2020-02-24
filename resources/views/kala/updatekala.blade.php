<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-10{
	width:450px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 6px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: #2A88AD;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: #2A88AD;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: #2A88AD;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
	float: right;
	width: 250px;
	font: 12px Arial, Helvetica, sans-serif;
	color: #4D4D4D;
	margin-top: 10px;
	text-align: right;
}
</style>
<body>
    <div class="form-style-10" >
		
	<form method="post" action="{{'updated'}}/?id={{$all->id}}">
            {{ csrf_field() }}
            <div class="section"><span>1</span>id & name</div>
            <div class="inner-wrap">
              <a href="{{'updatekalatable/updated/'.$id=$all->id}}>"><label>id <input type="text" name="id" value={{$all->id}} /></label></a>  
                <label>kala name <input name="name" value={{$all->name}} ></label>
            </div>
        
            <div class="section"><span>2</span> description & category</div>
            <div class="inner-wrap">
                <label>description <textarea type="text" name="description" value=""> {{$all->description}}</textarea></label>
				
				<label for="category" >categories </label>
				<select id="category" name="categoryid" value={{$all->Category['categoryname']}} >
					@foreach ($allcategory as $x)
					<option  >{{$x->categoryname}}</option>
				 @endforeach 
				 </select>
                
            </div>
        
            <div class="section"><span>3</span>price and number</div>
                <div class="inner-wrap">
				<label>price <input id="password" type="text" name="price" value="{{$all->price}}"  /></label>
				<label>number <input  type="text" name="num" value="{{$all->num}}"   /></label>
				<div class="button-section">
             <input type="submit" value="Update" />
            </div>
			
            </div>
            
		</form>
		
	
	<form action="{{'showme'}}" method="POST">
		{{ csrf_field() }}


				<label>	kala image </label>
	<select id="image" name="imagename" value="hiiii" >
					@foreach ($all->photos as $p) 
			<option>{{$p->path}}</option>	
				@endforeach
				</select>

				<div class="button-section">
					<input type="submit" value="select picture" />
				   </div>
	</form>
	
		
		</div>
		


		<script src="{{asset ('app-assets/js/jquery-3.2.1.min.js')}}"></script>
       
	
        
		
		

        <script>
        
 
//       $('form').on('submit',function(e){
// 	e.preventDefault();
	
//         var a = $("#phototoupdate").val();
//         console.log(a);
// 	$.ajax({
//         url:  '{{ url('updatekalatable/updatepic') }}',
//         dataType: 'json',
//         type: "post",
//         data: {
//           photoid: a,
//         },
//         success: function(response, status) {
//         //    alert("hi");
//         },
//         // error: function(XMLHttpRequest, textStatus, erroeThrown) {
//         //   console.log('AJAX error:' + textStatus)
//         // }
//       });
      
// });

        </script>
</body>
</html>



