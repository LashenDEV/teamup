<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $club = Clubs::where('president_id', \Auth::user()->id)->first();
        $payments = Payment::with('member')->where('club_id', $club->id)->where('payment_status', 'approved')->paginate(10);
        return view('president.payment.index', compact('payments'));
    }
}
