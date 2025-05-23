@extends('layouts.backend.master')

@section('content')
    <div class="bg-white shadow-lg rounded-2xl p-6 m-10">
        <p class="text-[12px] sm:text-base md:text-xl lg:text-2xl font-bold mb-4 text-[#025CA3]">Booking Table</p>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase leading-normal">
                        <th class="py-3 px-1 text-left text-[12px] md:text-[14px] whitespace-nowrap ">Booking ID</th>
                        <th class="py-3 px-1 text-left text-[12px] md:text-[14px] whitespace-nowrap ">Customer Name</th>
                        <th class="py-3 px-1 text-center text-[12px] md:text-[14px] whitespace-nowrap ">Customer Phone</th>
                        <th class="py-3 px-1 text-[12px] md:text-[14px] whitespace-nowrap text-center">Customer Email</th>
                        <th class="py-3 px-1 text-left text-[12px] md:text-[14px] whitespace-nowrap">Customer Address</th>
                        <th class="py-3 px-6 text-center text-[12px] md:text-[14px] whitespace-nowrap">Model</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[14px] whitespace-nowrap">Reg Number</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[14px] whitespace-nowrap">Booked Dates</th>
                        <th class="py-3 px-6 text-left text-[12px] md:text-[14px] whitespace-nowrap">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @forelse ($bookings as $key=> $booking)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-1 text-center whitespace-nowrap">
                                {{ $booking->id }}
                            </td>
                            <td class="py-3 px-1 whitespace-nowrap text-center">
                                {{ $booking->user->name }}
                            </td>
                            <td class="py-3 px-1 whitespace-nowrap text-center">
                                {{ $booking->user->phone }}
                            </td>
                            <td class="py-3 px-1 whitespace-nowrap">
                                {{ $booking->user->email }}
                            </td>
                            <td class="py-3 px-1 whitespace-nowrap text-center">
                                {{ $booking->user->address }}
                            </td>

                            <td class="py-3 px-6 whitespace-nowrap">
                                {{ $booking->vehicle->name }} {{ $booking->vehicle->brand }}
                            </td>
                            <td class="py-3 px-6 whitespace-nowrap">
                                {{ $booking->vehicle->registration_num }}
                            </td>
                            <td class="py-3 px-6 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($booking->book_date)->format('M d, Y') }} →
                                {{ \Carbon\Carbon::parse($booking->dropoffdate)->format('M d, Y') }}
                            </td>
                            <td class="py-3 px-6 whitespace-nowrap">
                                <span
                                    class="px-3 py-1 rounded-full text-white bg-green-500 text-xs font-semibold ">
                                  {{ $booking->vehicle->status }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-400">No bookings found.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
