<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Web\SuccessPaymentController;
use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('payment');
    }

    
    public function payment(Request $request)
    {   
        $payment = Payment::create([
            'first_name'=> $request->cc_name,
            'last_name'=> $request->cc_lname,
            'card_num'=> $request->cardNumber,
            'exp_month'=> $request->cc_exp_mo,
            'exp_year'=> $request->cc_exp_yr,
            'cvv'=> $request->cvv,
        ]);


       if ($payment)
        {

             return redirect()->route('success')->with('success', 'Payment successful');

        } 
                else {
                    
                    return redirect()->back()->with('error', 'Payment failed');
                }   
    }
}
