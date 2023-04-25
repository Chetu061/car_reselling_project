
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Car Reselling Blogging Application</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
             
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in &nbsp;&nbsp;</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Cars Blog Page!</h1>
                    
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('uploads/car/'.$latest_car->images) }}" alt="..." /></a>
                      
                      {{-- image --}}
          
                    
                        {{-- @foreach($img_url as $img)
                        <img src="{{ asset('uploads/car/'.$img) }}" width="300px" height="300px" alt="Image">
                        @endforeach --}}
                        <div class="card-body">
                            <div class="small text-muted">{{$latest_car->car_type}}</div>
                            <h2 class="card-title">{{$latest_car->car_name}}</h2>
                            <p class="card-text">Top Speed :{{$latest_car->top_speed}}</p>
                            <a class="btn btn-primary">Rs.{{$latest_car->price}}</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($data as $d)
                            
                      
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ asset('uploads/car/'.$d->images) }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$d->car_type}}</div>
                                    <h2 class="card-title h4">{{$d->car_name}}</h2>
                                    <p class="card-text">Top Speed :{{$d->top_speed}}</p>
                                    <a class="btn btn-primary">Rs.{{$d->price}}</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                          
                        </div>
                        @endforeach
                        {{$data->links()}}
                    </div>
                    <!-- Pagination-->
                 
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                  
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Top 5 Car</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($tops as $t)
                                    
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">{{$t->car_name}}</a></li>
                                    </ul>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                  
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
