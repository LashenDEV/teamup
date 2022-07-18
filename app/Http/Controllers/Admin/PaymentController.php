<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::with('member', 'club')->paginate(10);
        return view('admin.payment.index',compact('payments'));
    }
}
