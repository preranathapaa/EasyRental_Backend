@extends('layouts.backend.master')

@section('content')



   <div class="bg-white shadow-lg rounded-2xl p-6 m-10">
    <p class="text-[12px] sm:text-base md:text-xl lg:text-2xl font-bold mb-4 text-[#025CA3]">Booking Table</p>
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border border-gray-200">
        <thead>
          <tr class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
            <th class="py-3 px-1 text-left text-[12px] md:text-[14px] lg:text-[16px]">Booking ID</th>
            <th class="py-3 px-6 text-left text-[12px] md:text-[14px] lg:text-[16px]">Customer</th>
            <th class="py-3 px-6 text-left text-[12px] md:text-[14px] lg:text-[16px]">Vehicle</th>
            <th class="py-3 px-6 text-left text-[12px] md:text-[14px] lg:text-[16px]">Dates</th>
            <th class="py-3 px-6 text-left text-[12px] md:text-[14px] lg:text-[16px]">Status</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm">
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="py-3 px-6">BKG-001</td>
            <td class="py-3 px-6">Alice Johnson</td>
            <td class="py-3 px-6">Toyota Corolla</td>
            <td class="py-3 px-6">May 20 - May 25</td>
            <td class="py-3 px-6 text-green-600 font-semibold">Confirmed</td>
          </tr>
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="py-3 px-6">BKG-002</td>
            <td class="py-3 px-6">Bob Smith</td>
            <td class="py-3 px-6">Honda Civic</td>
            <td class="py-3 px-6">May 22 - May 26</td>
            <td class="py-3 px-6 text-yellow-500 font-semibold">Pending</td>
          </tr>
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="py-3 px-6">BKG-003</td>
            <td class="py-3 px-6">Charlie Lee</td>
            <td class="py-3 px-6">Ford Focus</td>
            <td class="py-3 px-6">May 18 - May 21</td>
            <td class="py-3 px-6 text-red-500 font-semibold">Cancelled</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



@endsection
