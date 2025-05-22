@extends('layouts.backend.master')

@section('content')




    <div class="flex flex-col sm:flex-row flex-wrap gap-6 p-6 justify-center ">
        <div class="flex flex-col p-10 bg-blue-200 flex-1 h-auto rounded-xl shadow-md shadow-amber-50">
            <p class="text-center text-white text-7xl md:text-5xl font-extrabold">{{$totalVehicles}}</p>
            <p class="text-center text-white font-bold text-[20px] md:text-[16px] lg:text-[20px]">Total Vehicles</p>
        </div>


        <div class="flex flex-col p-10 bg-pink-300 flex-1  h-auto rounded-xl shadow-md shadow-amber-50">
            <p class="text-center text-white text-7xl md:text-5xl font-extrabold">50</p>
            <p class='text-center text-white font-bold text-[20px] md:text-[16px] lg:text-[20px] '>Available Vehicles</p>
        </div>


        <div class="flex flex-col p-10 bg-orange-200 flex-1 h-auto rounded-xl shadow-md shadow-amber-50">
            <p class="text-center text-white text-7xl md:text-5xl font-extrabold">50</p>
            <p class="text-center text-white font-bold text-[20px] md:text-[16px] lg:text-[20px]">Total Bookings</p>
        </div>


    </div>
@endsection
