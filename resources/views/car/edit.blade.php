





<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           <div class="p-6 bg-white border-b border-gray-200">
  
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Laravel 8 </title>
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
                <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
                <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
            </head>
            <body>
              
                <div class="container">
                  <h2></h2>
                  <form  action="{{route('car.update',$data->id)}}" Method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="car_name">Car Name:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="car_name" placeholder="Enter Car Name" name="car_name"value="{{$data->car_name}}">
                      </div>
                    </div>
                    
                
                   
                
                
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="car_type">Car Type:</label>
                      <div class="col-sm-10">
                      <select class="form-control" name="car_type" value="{{$data->car_type}}">
                          <option value="">Select Car Type</option>
                          <option value="Normal">Normal</option>
                          <option value="Luxury">Luxury</option>
                          <option value="Sports">Sports</option>
                      </select>
                      </div>
                  </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="price">Price:</label>
                        <div class="col-sm-10">          
                          <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price"value="{{$data->price}}">
                        </div>
                      </div>
                
                     
                
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="top_speed">Top Speed:</label>
                        <div class="col-sm-10">    
                        <select class="form-control" name="top_speed"value="{{$data->top_speed}}">
                            <option value="">Select Top Speed</option>
                            <option value="100Km/h">100 Km/h</option>
                            <option value="200Km/h">200 Km/h</option>
                            <option value="300Km/h">300 Km/h</option>
                        </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="images">Images:</label>
                      <div class="col-sm-10">
                      <input required  type="file" aria-describedby="images"  class="form-control" 
                      id="images" name="images[]" value="images" multiple>
                      </div>
                    </div>
                   
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </body>
    </div>
  </div>
  </div>
  </div>
  
  
  <script type="text/javascript">
  
  
  </script>
  </html>
  </x-app-layout>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  