<x-app-layout>
   
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
  	<base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    
      <div class="container-scroller">

    @include("admin.navbar")


<h1>Success</h1>
<div  style="position: relative; top: 50px; width: 500px; right: -130px; padding-bottom: 100px;">
	
	<form method="post" action="{{ url('/updatefoodchef', $data->id) }}" enctype="multipart/form-data">

		@csrf

		<div>
			<label>Chef Name</label>
			<input style="color: black;" type="text" name="name" value="{{$data->name}}">
		</div>

		<div>
			<label>Speciality</label>
			<input style="color: black;" type="text" name="speciality" value="{{$data->speciality}}">
		</div>

		<div>
			<label>Old Image</label>
			<img height="100" width="100" src="/chefimage/{{$data->image}}">
		</div>

		<div>
			<label>New Image</label>
			<input style="color: black;" type="file" name="image">
		</div>

		<div>
			<input style="color: #fff" type="submit" name="submit" value="Save">
		</div>
	</form>
</div>

</div>

   @include("admin.adminscript")
  </body>
</html>
