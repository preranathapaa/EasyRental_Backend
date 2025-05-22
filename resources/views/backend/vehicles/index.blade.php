@extends('layouts.backend.master')

@section('content')
    <div class="bg-white shadow-lg rounded-2xl p-6 m-10">
        <div class="bg-green-500 inline-block !m-10 px-4 py-2 !rounded-md  text-white cursor-pointer hover:bg-red-500 ">

            <a class="text-white no-underline hover:no-underline " href="{{ route('vehicles.create') }}">Add New Vehicle</a>
        </div>
        <p class="text-[12px] sm:text-base md:text-xl lg:text-2xl font-bold mb-4 text-[#025CA3]">Vehicle Table</p>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-700">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">Vehicle_Name</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">Image</th>

                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">Type</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">Brand</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">registration_num</th>

                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">mileage</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">engine</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">price</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[16px] lg:text-[16px]">Status</th>

                        <th class="py-3 px-6 text-center text-[12px] md:text-[16px] lg:text-[16px]">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">

                    @foreach ($vehicles as $vehicle)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6 text-center">{{ $vehicle->name }}</td>
                            <td class="py-3 px-6 text-center">
                                @if ($vehicle->image)
                                    <img class="w-20 h-20 object-cover rounded-md"
                                        src="{{ asset($vehicle->image) }}" alt="Vehicle Image">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->type }}</td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->brand }}</td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->registration_num }}</td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->mileage }}</td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->engine }}</td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->price }}</td>
                            <td class="py-3 px-6 text-center">{{ $vehicle->status }}</td>

                            <td class="py-3 px-6 flex items-center  ">
                                <a class="text-white !no-underline  !bg-green-500 hover:bg-green-900 hover:cursor-pointer px-4 py-2 mr-4 rounded-md"
                                    href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
                                <form method="POST" action="{{ route('vehicles.destroy', $vehicle->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="text-white bg-red-500 hover:bg-red-800 hover:cursor-pointer !rounded-md px-4 py-2  "
                                        type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
