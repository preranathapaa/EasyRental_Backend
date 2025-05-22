<?php

namespace App\Http\Controllers\api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleApiConroller extends Controller
{
    public function index()
    {
        try{
            $vehicales = Vehicle::get();
            if($vehicales->isEmpty()){
                return response()->json(['statusCode' => 404, 'error' => true, 'message' => 'No vehicales found']);
            }
            return response()->json([
                'status' => true,
                'statusCode'=>200,
                'message' => 'All vehicales retrived successfully',
                'data' => $vehicales
            ]);
            
        }catch(\Exception $e){
            return response()->json(['statusCode' => 500, 'error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function single($vehicleid)
    {
        try{
            $vehicales = Vehicle::find($vehicleid);
            if($vehicales){
                return response()->json([
                    'status' => true,
                    'statusCode'=>200,
                    'message' => 'Vehicale retrived successfully',
                    'data' => $vehicales
                ]);
            }else{
                return response()->json(['statusCode' => 404, 'error' => true, 'message' => 'Vehicale not found']);
            }
            
        }catch(\Exception $e){
            return response()->json(['statusCode' => 500, 'error' => true, 'message' => $e->getMessage()]);
        }
    }
}