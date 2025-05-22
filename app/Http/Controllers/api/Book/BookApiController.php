<?php

namespace App\Http\Controllers\api\Book;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class BookApiController extends Controller
{
    
    public function index()
    {
        try {
            $bookings = Book::with(['vehicle'])->where('user_id', Auth::id())->get();

            return response()->json([
                'status' => true,
                'statusCode' => 200,
                'message' => 'Bookings retrieved successfully',
                'data' => $bookings
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Something went wrong while retrieving bookings.',
                'error' => $e->getMessage()
            ], 500);
        }
    } 


    
    public function book(Request $request)
    {
        try {
            $request->validate([
                'vehicle_id' => 'required|exists:vehicles,id',
                'book_date' => 'required|date',
                'dropoffdate' => 'required|date|after_or_equal:book_date',
            ]);

            // Check for booking conflict
            $conflict = Book::where('vehicle_id', $request->vehicle_id)
                ->where(function ($query) use ($request) {
                    $query->whereBetween('book_date', [$request->book_date, $request->dropoffdate])
                        ->orWhereBetween('dropoffdate', [$request->book_date, $request->dropoffdate])
                        ->orWhere(function ($q) use ($request) {
                            $q->where('book_date', '<=', $request->book_date)
                                ->where('dropoffdate', '>=', $request->dropoffdate);
                        });
                })
                ->exists();

            if ($conflict) {
                return response()->json([
                    'message' => 'This vehicle is already booked in the selected date range.'
                ], 409); // Conflict
            }

            $input = $request->all();
            $input['user_id'] = Auth::id();

            $booking = Book::create($input);

            return response()->json([
                'message' => 'Vehicle booked successfully',
                'data' => $booking
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Something went wrong while booking the vehicle.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}