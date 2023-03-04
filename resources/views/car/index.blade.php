


<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Reselling Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="container pt-3">
  @if (session()->has('message'))
  <div class="alert alert-success alert-dismissable">
      {{ session()->get('message') }}
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  </div>
@endif

<button><a href={{route('car/create')}} class="btn btn-success">ADD CAR</a></button>&nbsp;



  <table class="table table-striped">
    <thead>
      <tr>
              

       
        <th>Car Name</th>
          <th>Car Type</th>
            <th>PRICE</th>
              <th>Top Speed</th>
              <th>Images</th>
              <th>Action</th>
     
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $d)
      <tr>
     
   
      <td>{{$d->car_name}}</td>
        <td>{{$d->car_type}}</td>
          <td>{{$d->price}}</td>
            <td>{{$d->top_speed}}</td>
            <td>
              
             <?php
              $img_url = explode("|",$d->images);
              // @dd($img_url);

              ?> 
              @foreach($img_url as $img)
              <img src="{{ asset('uploads/car/'.$img) }}" width="70px" height="70px" alt="Image">
              @endforeach
             
          </td>
          <td><a href="{{route('car.delete',$d->id)}}"><button class="btn btn-danger">Delete</button></a>
            <a href="{{route('car.view',$d->id)}}"><button class="btn btn-warning">View</button></a>
            <a href="{{route('car.edit',$d->id)}}"><button class="btn btn-success">Edit</button></a>
          </td>

     
   

      </tr>
    @endforeach
    </tbody>
  </table>
</div>
</body>
<script type="text/javascript">

</script>
</html>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>






      






    