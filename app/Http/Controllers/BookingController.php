<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'booking_date' => 'required',
            'quantity' => 'required',
            'total_price' => 'required',
            'schedule_id' => 'required'
        ]);

        $user = auth()->user();

        $validate['user_id'] = $user->id;
        $validate['booking_code'] = strtoupper(uniqid());
        $validate['status'] = 'Active';

        $booking = Booking::create($validate);

        if ($booking) {
            $payment = Payment::create([
                'booking_id' => $booking->id,
                'amount_paid' => $booking->total_price,
                'payment_status' => 'Pending',
            ]);
            if($payment){
                return redirect()->route('home')->with('success', 'Booking created successfully');
            } else {
                return redirect()->route('home')->with('error', 'Error while create payment');
            }
        } else {
            return redirect()->route('home')->with('error', 'Something went wrong');
        }
    }

    public function callback(){}
}
