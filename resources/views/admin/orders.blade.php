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
<div class="container" align="center">
<h1>Costomer Orders</h1>


<form style="color: black;" method="get" action="{{ url('/search') }}">

	@csrf

	<input type="text" name="search">
	<input type="submit" value="Search" class="btn btn-success">

</form>

    <div style="padding: 20px">
    	<table>
    		<tr>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Name</th>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Phone</th>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Adress</th>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Food name</th>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Price</th>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Quantity</th>
    			<th class="border border-success p-2 mb-2" style="padding: 20px">Total Price</th>
    		</tr>
@foreach($data as $data)
			<tr align="center">
				<td class="border border-success p-2 mb-2">{{$data->name}}</td>
				<td class="border border-success p-2 mb-2">{{$data->phone}}</td>
				<td class="border border-success p-2 mb-2">{{$data->adress}}</td>
				<td class="border border-success p-2 mb-2">{{$data->foodname}}</td>
				<td class="border border-success p-2 mb-2">{{$data->price}}$</td>
				<td class="border border-success p-2 mb-2">{{$data->quantity}}</td>
				<td class="border border-success p-2 mb-2">{{$data->price * $data->quantity}}$</td>
			</tr>
@endforeach

    	</table>
    </div>

</div>
</div>





   @include("admin.adminscript")
  </body>
</html>
