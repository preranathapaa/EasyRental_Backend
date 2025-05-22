@extends('layouts.backend.master')

@section('content')
    <form class="flex items-center justify-center mt-10 " method="POST" action="{{ route('vehicles.update', $data->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col items-center justify-center bg-gray-300 w-[500px] p-10 rounded-lg">
            <div class="flex flex-col w-full">
                <label class="text-[20px] text-black font-bold" for="">Vehicle Name</label>
                <input class="bg-white p-2 rounded-md" type="text" value="{{ old('name', $data->name) }}" name="name"
                    required>
            </div>

            <div class="flex flex-col w-full mt-4">
                <label class="text-[20px] text-black font-bold" for="">Vehicle Image</label>
                <input type="file" name="image" class="bg-white p-2 rounded-md w-full">

                @if ($data->image)
                    <img src="{{ asset('storage/' . $data->image) }}" class="mt-2 w-32 h-32 object-cover"
                        alt="Vehicle Image">
                @endif
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Registration Number</label>
                <input class="bg-white p-2 rounded-md" type="text"
                    value="{{ old('registration_num', $data->registration_num) }}" name="registration_num" required>
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Type</label>
                <input class="bg-white p-2 rounded-md" type="text" value="{{ old('type', $data->type) }}" name="type"
                    required>
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Mileage (kmpl)</label>
                <input class="bg-white p-2 rounded-md" type="text" value="{{ old('mileage', $data->mileage) }}"
                    name="mileage" required>
            </div>

            <div class="flex flex-col mt-4 w-full ">
                <label class="text-[20px] text-black font-bold" for="">Engine CC</label>
                <input class="bg-white p-2 rounded-md" type="text" value="{{ old('engine', $data->engine) }}"
                    name="engine" required>
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Brand</label>
                <input class="bg-white p-2 rounded-md" type="text" value="{{ old('brand', $data->brand) }}"
                    name="brand" required>
            </div>

            <div class="flex flex-col mt-4 w-full">
                <label class="text-[20px] text-black font-bold" for="">Price per Day(RS)</label>
                <input class="bg-white p-2 rounded-md" type="text" value="{{ old('price', $data->price) }}"
                    name="price" required>
            </div>


            <button class="bg-blue-700 !px-4 py-2 mt-4 text-white !rounded-md cursor-pointer hover:bg-green-800"
                type="submit">Edit Vehicle</button>
        </div>
    </form>
@endsection
