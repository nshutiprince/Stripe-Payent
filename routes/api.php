<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(WebHookController::class)->group(function () {
    Route::post('stripe/webhooks',  'handleWebhook');
});

Route::controller(StripePaymentController::class)->group(function () {
    Route::group(['middleware' => ['auth:api', 'verified']], function () {
        Route::post('generate-session', 'generateStripeSession');
    });
});
