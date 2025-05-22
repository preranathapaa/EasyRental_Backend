<?php

namespace App\Http\Controllers\backend;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreVehicalRequest;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $vehicles = Vehicle::all();

        return view("backend.vehicles.index", compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.vehicles.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicalRequest $request)
    {


        // dd($request->all());
        $data = $request->all();

         $data['status'] = 'Available';

        if($request->hasFile('image')){
            $data['image'] = $request->image->store('vehicles', 'public');
            // dd($data['image']);
        }



        Vehicle::create($data);

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Vehicle::find($id);
        return view('backend.vehicles.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $vehicle = Vehicle::findOrFail($id);

         $data = $request->only([
        'name',
        'type',
        'brand',
        'registration_num',
        'mileage',
        'engine',
        'price'
    ]);


     // Check if a new image has been uploaded
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('vehicles', 'public');
        $data['image'] = $imagePath;


    }

       $vehicle->update($data);

    return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicle.index');
    }
}
