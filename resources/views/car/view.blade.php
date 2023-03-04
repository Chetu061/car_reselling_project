<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Car Details') }}
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
                <div class="col-12" >
                    <p class="lead">Car Details  :-</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Car Name :</th>
                                <td>{{$data->car_name}}</td>
                            </tr>
                            <tr>
                                <th>Car Type :</th>
                                <td>{{$data->car_type}}</td>
                            </tr>
                            <tr>
                                <th>Price :</th>
                                <td>Rs.{{$data->price}}</td>
                            </tr>
                            <tr>
                                <th>Top Speed :</th>
                                <td>{{$data->top_speed}}</td>
                            </tr>
                            <tr>
                              <th>Image :</th>
                              <td>
                                <?php
                                $img_url = explode("|",$data->images);
                                // @dd($img_url);
                  
                                ?> 
                                @foreach($img_url as $img)
                                <img src="{{ asset('uploads/car/'.$img) }}" width="300px" height="300px" alt="Image">
                                @endforeach
                            </td>
                        </tr>
                    </tbody></table>
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

