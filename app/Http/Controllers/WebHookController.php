<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Webhook;

class WebHookController extends Controller
{
    public function handleAccountWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sig_header,
                config('services.stripe.webhook_secret')
            );
        } catch (SignatureVerificationException $e) {
            //handle exception
        }

        $data = $event->data->object;

        switch ($event->type) {
            case 'payment_intent.succeeded':
                //handle response using data provided by stripe web hook
                break;


            case 'payment_intent.payment_failed':
                //handle response using data provided by stripe web hook

                break;
        }
    }
}
