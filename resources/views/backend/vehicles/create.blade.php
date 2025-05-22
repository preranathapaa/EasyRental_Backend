@extends('layouts.backend.master')

@section('content')
    <form class="flex items-center justify-center mt-10 pb-10" method="POST" action="{{ route('vehicles.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col items-center justify-center bg-gray-300 w-[500px] p-10 rounded-lg">

            <div class="flex flex-col w-full">
                <label class="text-[20px] text-black font-bold" for="">Vehicle Name</label>
                <input class="bg-white  p-2 rounded-md" type="text" name="name" required>
            </div>

            <div class="flex flex-col w-full mt-4">
                <label class="text-[20px] text-black font-bold">Vehicle Image</label>
                <input class="bg-white p-2 rounded-md" type="file" name="image" accept="image/*">
            </div>


            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Registration Number</label>
                <input class="bg-white p-2 rounded-md" type="text" name="registration_num" required>
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="type">Type</label>
                <select name="type" class="bg-white p-2 rounded-md" required>
                    <option value="" disabled selected>Select Type</option>
                    <option value="Bike" {{ isset($data) && $data->type == 'Bike' ? 'selected' : '' }}>Bike</option>
                    <option value="Scooter" {{ isset($data) && $data->type == 'Scooter' ? 'selected' : '' }}>Scooter
                    </option>
                </select>
            </div>


            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Mileage (kmpl)</label>
                <input class="bg-white p-2 rounded-md" type="text" name="mileage" required>
            </div>


            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Engine CC</label>
                <input class="bg-white p-2 rounded-md" type="text" name="engine" required>
            </div>


            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Brand</label>
                <input class="bg-white p-2 rounded-md" type="text" name="brand" required>
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Price per Day(Rs)</label>
                <input class="bg-white p-2 rounded-md" type="text" name="price" required>
            </div>




            <button class="bg-blue-700 !px-4 py-2 mt-4 text-white !rounded-md cursor-pointer hover:bg-green-800 "
                type="submit">Add Vehicle</button>




        </div>
    </form>
@endsection
