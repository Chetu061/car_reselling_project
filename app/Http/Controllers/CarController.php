<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    public function store(Request $request){
        $car=new Car();
        $car->car_name=$request->car_name;
        $car->car_type=$request->car_type;
        $car->price=$request->price;
        $car->top_speed=$request->top_speed;

        // if($request->hasfile('images'))
        // {
        //     $file = $request->file('images');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/car/', $filename);
        //     $car->images = $filename;
        // }
        if($files=$request->file('images')){
            foreach($files as $file){
                // $name=$file->getClientOriginalExtension();
                // $filename = time().'.'.$name;
                // $file->move('uploads/car/',$filename);
                // $images[]=$filename;
                $name=$file->getClientOriginalName();
            $file->move('uploads/car/',$name);
            $images[]=$name;
            }
        }
        $car->images =   implode("|",$images);


        $car->save();
       
        return redirect()->route('car.index')->with('message','Added Successfully ! ');

    }
    public function index()
    {
        $data=Car::all();
        return view('car.index',compact('data'));
    }

    public function edit($id)
    {
        $data=Car::find($id);
        return view('car.edit',compact('data'));
    }
    public function update (Request $request,$id)
    {
         $car=Car::find($id);
        
         $car->car_name=$request->car_name;
         $car->car_type=$request->car_type;
         $car->price=$request->price;
         $car->top_speed=$request->top_speed;
 
       
         if($files=$request->file('images')){
            foreach($files as $file){
                // $name=$file->getClientOriginalExtension();
                // $filename = time().'.'.$name;
                // $file->move('uploads/car/',$filename);
                // $images[]=$filename;
                $name=$file->getClientOriginalName();
            $file->move('uploads/car/',$name);
            $images[]=$name;
            }
        }
        $car->images =   implode("|",$images);


      
       
 
      
         $car->update();
         return redirect()->route('car.index')->with('message','Update Successfully ! ');
    }
 

    public function View($id)
    {
        $data=Car::find($id);
        return view('car.view',compact('data'));
    }

  public function delete($id){

       $car=Car::find($id);
       $car->delete();
       return redirect()->route('car.index')->with('message','Delete Successfully ! ');

   }

}
