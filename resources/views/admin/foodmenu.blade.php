<x-app-layout>
   
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    
      <div class="container-scroller">

    @include("admin.navbar")

    <div  style="position: relative; top: 100px; width: 500px; right: -130px;">
    	
    	<form method="post" action="{{ url('/uploadfood') }}" enctype="multipart/form-data">

    		@csrf

    		<div>
    			<label>Title</label>
    			<input style="color: black;" type="text" name="title" placeholder="Write a Title" required>
    		</div>
    		<div>
    			<label>Price</label>
    			<input style="color: black;" type="number" name="price" placeholder="Write a Price" required>
    		</div>
    		<div>
    			<label>Image</label>
    			<input style="color: black;" type="file" name="img" required>
    		</div>
    		<div>
    			<label>Description</label>
    			<input style="color: black;" type="text" name="description" placeholder="Write a Description" required>
    		</div>
    		<div>
    			<input type="submit" value="Save">
    		</div>
    	</form>
    </div>

    <div style="clear: both;"></div>
<div>
  
  <table bgcolor="black" style="display: block; width: 700;">
    <tr>
      <th style="padding: 30px">Food name</th>
      <th style="padding: 30px">Price</th>
      <th style="padding: 30px">Description</th>
      <th style="padding: 30px">Image</th>
      <th style="padding: 30px">Action</th>
      <th style="padding: 30px">Action2</th>
    </tr>
@foreach($data as $data)
    <tr align="center">
      <td>{{ $data->title}}</td>
      <td>{{ $data->price}}</td>
      <td>{{ $data->description}}</td>
      <td><img height="100" width="100" src="/foodimage/{{ $data->image}}"></td>
      <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
      
      <td><a href="{{url('/updateview',$data->id)}}">Uptade</a></td>
    </tr>
@endforeach
  </table>

</div>

</div>

   @include("admin.adminscript")
  </body>
</html>
