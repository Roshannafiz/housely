<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Order;
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

    public function pay(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'locality' => 'required',
            'post_code' => 'required',
        ]);
        // Set / Pass Data Using Session
        session(['house_id' => $request->house_id]);
        session(['total_amount' => $request->total_amount]);
        session(['first_name' => $request->first_name]);
        session(['last_name' => $request->last_name]);
        session(['email' => $request->email]);
        session(['phone' => $request->phone]);
        session(['country' => $request->country]);
        session(['state' => $request->state]);
        session(['locality' => $request->locality]);
        session(['post_code' => $request->post_code]);

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'email' => 'hi@gmail.com',
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),
            ))->send();
            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));

            $response = $transaction->send();
            if ($response->isSuccessful()) {
                $arr = $response->getData();
                $payment = new Order();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];

                // Get User Request Filed Info Using By Session
                $payment->user_id = Auth::id();
                $payment->house_id = session('house_id');
                $payment->total_amount = session('total_amount');
                $payment->first_name = session('first_name');
                $payment->last_name = session('last_name');
                $payment->email = session('email');
                $payment->phone = session('phone');
                $payment->country = session('country');
                $payment->state = session('state');
                $payment->locality = session('locality');
                $payment->post_code = session('post_code');
                $payment->save();

                // After Payment Delete Already Paid House / Specific By User Book
                $already_paid_house = Booking::where('house_id', session('house_id'))->where('user_id', Auth::id())->get();
                Booking::destroy($already_paid_house);

                return redirect('/payment-success')->with('message', $arr['id']);
            } else {
                return $response->getMessage();
            }
        } else {
            return redirect('/payment-error')->with('error_message', "User Decline The Payment !");
        }
    }

    public function error()
    {
        return redirect('/payment-error')->with('error_message', "User Decline The Payment !");
    }

    // Error And Success View
    public function payment_success_view()
    {
        return view('frontend.payment.payment-success');
    }

    public function payment_error_view()
    {
        return view('frontend.payment.payment-error');
    }
}
