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

<div style="position: relative; padding: 30px">
    <table style="color: #555;" bgcolor="#fff444">
    	<tr>
    		<th style="padding: 20px">Name</th>
    		<th style="padding: 20px">Email</th>
    		<th style="padding: 20px">Phone</th>
    		<th style="padding: 20px">Guest</th>
    		<th style="padding: 20px">Date</th>
    		<th style="padding: 20px">Time</th>
    	</tr>

    	<tr align="center" style="border: 1px solid #333;">
    		@foreach($data as $data)		
	    		<td>{{ $data->name }}</td>
	    		<td>{{ $data->email }}</td>
	    		<td>{{ $data->phone }}</td>
	    		<td>{{ $data->guest }}</td>
	    		<td>{{ $data->date }}</td>
	    		<td>{{ $data->time }}</td>
    		@endforeach
    	</tr>
    </table>
</div>

</div>

   @include("admin.adminscript")
  </body>
</html>
