<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $session = \Stripe\Checkout\Session::create([
            'customer_email' => auth()->user()->email,
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.canceled'),
            'payment_method_types' => ['card'],
            // 'billing_address_collection' => 'required',
            'subscription_data' => [
                'trial_period_days' => 7,
                'items' => [
                    ['plan' => 'monthly_plan']
                ]
            ]
            // 'line_items' => [
            //     [
            //         'amount' => 19999,
            //         'currency' => 'usd',
            //         'name' => 'Logic Pro X',
            //         'description' => 'The most powerful audio engineering tool for MacOS.',
            //         'images' => ['http://a1.mzstatic.com/us/r30/Purple6/v4/34/30/44/34304426-6ed4-703c-12de-8a213a8e5d09/LogicProX.png'],
            //         'quantity' => 1,
            //     ]
            // ]
        ]);

        return view('checkout.index', [
            'stripe_session_id' => $session->id,
        ]);
    }
}
