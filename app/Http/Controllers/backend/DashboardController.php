<?php

namespace App\Http\Controllers\backend;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $totalVehicles = Vehicle::count();
        return view('backend.dashboard', compact('totalVehicles'));
    }
}
