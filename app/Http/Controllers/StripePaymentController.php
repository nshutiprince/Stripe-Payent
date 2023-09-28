<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Checkout\Session;

class StripePaymentController extends Controller
{
    public function generateStripeSession(Request $request)
    {
        try {
            new \Stripe\StripeClient(config('services.stripe.secret'));

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'unit_amount' => $amount, //in cent,
                            'product_data' => [
                                'name' => 'Product name',
                            ],
                        ],
                        'quantity' => 1,
                    ],
                ],
                'customer' => $stripeId, //customer stripe id (optional)
                'mode' => 'payment',
                'success_url' => $request->success_url,
                'cancel_url' => $request->cancel_url,
            ]);

            return response()->json([
                'session' => $session
            ]);
        } catch (\Exception $e) {
            //handle exceptions
        }
    }
}
