<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request){

        $validate = $request->validate([
            'user_id' => 'required',
            'amount_paid' => 'required',
            'payment_method' => 'required',
            'payment_status' => 'required',
        ]);
    }
}
