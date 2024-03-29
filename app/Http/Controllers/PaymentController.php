<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\HistoryLogs;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay($club_id, $description, $amount)
    {
        try {
            $response = $this->gateway->purchase(array(
                'amount' => $amount,
                'items' => array(
                    array(
                        'name' => $club_id,
                        'price' => $amount,
                        'description' => $description,
                        'quantity' => 1
                    )
                ),
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {


            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();


            if ($response->isSuccessful()) {
                $arr = $response->getData();
                $items = $arr['transactions'][0]['item_list']['items'];
                foreach ($items as $item) {
                    $payment = new Payment();
                    $payment->user_id = Auth::user()->id;
                    $payment->club_id = $item['name'];
                    $payment->description = $item['description'];
                    $payment->payment_id = $arr['id'];
                    $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr['payer']['payer_info']['email'];
                    $payment->amount = $arr['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr['state'];
                    $payment->save();
                    HistoryLogs::create([
                        'user_id' => \Auth::user()->id,
                        'description' => 'Registered to the ' . Clubs::where('id', $item['name'])->first()->name . ' ' . $item['description'] . '.'
                    ]);

                    return redirect()->route('club.view', $item['name'])->with('success', 'Thank you for your payment!');
                }
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment declined!';
        }
    }

    public function error()
    {
        return redirect()->back()->with('error', 'Oops something went wrong!');
    }
}
