<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Pest\TestCaseMethodFilters\TodoTestCaseFilter;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(1)
            ->cars()
            ->with(['primaryImage', 'maker', 'model'])
            ->orderBy('created_at', 'desc')
            ->get();
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
     return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
     return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function search()
    {
        $query = Car::where('published_at', '<', now())
            ->with(['model', 'fuelType', 'maker', 'city', 'primaryImage', 'carType'])
            ->orderBy('published_at', 'desc');
        $carCount = $query->count();
        $cars = $query->paginate(30);
        return view('car.search', compact('cars', 'carCount'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
    public function watchList()
    {
        //TODO i come back to this
        $cars = User::find(4)
            ->favouriteCars()
            ->with(['model', 'fuelType', 'maker', 'city', 'primaryImage', 'carType'])->get();
        return view('car.watchList', compact('cars'));
    }
}
