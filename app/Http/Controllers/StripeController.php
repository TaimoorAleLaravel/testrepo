<?php

namespace App\Http\Controllers;

use App\Models\ClientProfile;
use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('course.checkout');
    }

    public function charge(Request $request)
    {
        Stripe::setApiKey(config('stripe.secret'));
        if (!is_null(session()->get('client_id'))) {

            $client_id = session()->get('client_id');
           $clientprofile=  ClientProfile::where('client_id', $client_id)->first();

                       // return redirect()->route('client.household_size', ['locale' => app()->getlocale()]);
        
        $charge = Charge::create([
            'amount' => $clientprofile->total_payment * 100, // Amount in cents (e.g., $9.99)
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Payment from credit application for package ' . $clientprofile->pkg,
        ]);
        if ($charge) {
            Payment::create([
                'payment_id' => $charge->id,
                'payer_id' => $charge->source->id,
                'payer_email' => $charge->source->name,
                'amount' => $charge->amount / 100, // Convert cents to dollars
                'currency' => $charge->currency,
                'payment_status' => $charge->status,
            ]);

                    $clientprofile->payment_method = 'Stripe';
                    $clientprofile->payment_status = 'paid';
                    $clientprofile->save();

                    return view('client.login');

        }
        return back()->with('error', 'Payment fail!');

    }
}
}
