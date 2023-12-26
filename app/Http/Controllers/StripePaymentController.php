<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe (){
        return view('stripe');
    }

    public function stripePost (Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::crreate([
            'amount' => 100*100,
            'currency'=> "usd",
            'source'=> $request->stripe->token,
            'description' => "test"
        ]);
        Session::flash('success','Payment has been success');
        return back();
    }
}
