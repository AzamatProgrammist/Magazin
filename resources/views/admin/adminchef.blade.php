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

<div  style="position: relative; top: 50px; width: 500px; right: -130px; padding-bottom: 100px;">
    <form method="POST" action="{{ url('/uploadchef')}}" enctype="multipart/form-data">
      
      @csrf

      <div>
        <label>Name</label>
        <input style="color: black;" type="text" name="name" placeholder="Enter name">
      </div>
      <div>
        <label>Speciality</label>
        <input style="color: black;" type="text" name="speciality" placeholder="Enter the Speciality">
      </div>
      <div>
        <label>Image</label>
        <input style="color: black;" type="file" name="image">
      </div>
      <div>
        <input type="submit" name="submit" value="Save">
      </div>
    </form>
</div>


  <div>
    <table>
      <tr>
        <th style="padding: 20px">Chef Name</th>
        <th style="padding: 20px">Speciality</th>
        <th style="padding: 20px">Image</th>
        <th style="padding: 20px">Action</th>
        <th style="padding: 20px">Action2</th>
      </tr>
@foreach($data as $data)
      <tr align="center">
        <td>{{ $data->name }}</td>
        <td>{{ $data->speciality }}</td>
        <td><img height="100" width="100" src="/chefimage/{{ $data->image}}"></td>
        <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
        <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
      </tr>
@endforeach
    </table>
  </div>




</div>

   @include("admin.adminscript")
  </body>
</html>
