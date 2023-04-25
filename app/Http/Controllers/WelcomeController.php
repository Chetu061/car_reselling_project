<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class WelcomeController extends Controller
{
    public function index()
    {
        $data=Car::paginate(4);
        $latest_car =Car::latest()->first();
        $tops =Car::take(5) ->get();  
                                
        // dd($tops);
        return view('welcome',compact('data','latest_car','tops'));
    }

    
  

}
