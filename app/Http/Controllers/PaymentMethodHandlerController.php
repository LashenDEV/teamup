<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PaymentMethodHandlerController extends Controller
{
    public function paymentMethod($id, Request $request)
    {
        if ($request->payment_method != null) {
            if ($request->payment_method == 'paypal') {
                return redirect()->route('payment', ['club_id' => $id, 'description' => 'Annual Fee', 'amount'=>20]);
            } else {
                return redirect()->back()->with('error', 'Oops something went wrong !');
            }
        } else {
            return redirect()->back()->with('error', 'Oops something went wrong !');
        }
    }
}
