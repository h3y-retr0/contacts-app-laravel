<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function checkout() {
        return auth()->user()
        ->newSubscription('default', config('stripe.price_id'))
        ->checkout();
    }

    public function billingPortal() {
        return auth()->user()->redirectToBillingPortal();
    }

    public function freeTrialEnd() {
        return view('free-trial-end');
    }
}
