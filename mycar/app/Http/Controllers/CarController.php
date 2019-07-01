<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('cars.allcars', compact('cars'));
    }

    public function getbyid($id){
        $cars = Car::where('uploadby', $id);
        return view('cars.carbyid', compact('cars'));
    }
 
    public function create(){
        return view('car.create');
    }
 
    public function store(){
 
        $car = new Car();
        $car-> company_name	= request("company_name");
        $car-> model_name	= request("model_name");
        $car-> year	        = request("year");
        $car-> fuel_type	= request("fuel_type");
        $car-> engine	    = request("engine");
        $car->save();
        return redirect('/');
    }
}
