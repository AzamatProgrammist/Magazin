<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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

<div>
    <table style="position: relative; top: 100px; width: 500px; right: -130px;">
      <tr align="center">
        <th style="padding: 0 40px;">Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>

@foreach($data as $data)
      <tr align="center">
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        @if($data->usertype == "0")
        <td><a style="text-decoration: none;" href="{{url('/deleteusers', $data->id)}}">delete</a></td>
        @else
        <td><a>Not Allowed</a></td>
        @endif
      </tr>
@endforeach

    </table>
</div>


</div>
   @include("admin.adminscript")
  </body>
</html>

</body>
</html>