<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
//        $car = Car::where('price','>',20000)->get();
//        dump($car);
//        $maker = Maker::where('name','Toyota')->get();
//        dump($maker);
//        $fuelType = new FuelType(['name'=>'electric']);
//        $fuelType->save();
//        $car = Car::updateOrCreate(['id'=>1],['price'=>15000]);
//        dump($car);
//        Car::where('year','<',2020)->delete();
//        $car = Car::find(1);
//        dd($car->features, $car->primaryImage, $car->images);
//        $car = Car::find(1);
//        dd($car->favouredUsers);
        $maker=Maker::factory()->make();
        dd($maker);


        return view('home.index');
    }
}
