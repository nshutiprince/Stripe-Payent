## Laravel Stripe Payment Gateway Integration

Stripe is a very popular and secure internet payment gateway company which helps to accept payment worldwide. Stripe was founded in 2011 and is a payment gateway that lets you accept credit card payments by transferring money between your merchant account and a payment processor.

## Steps for Laravel Stripe Payment Gateway Integration Example

-   Step 1: Install fresh new Laravel application
-   Step 2: Install stripe-php Package
-   Step 3: Set Stripe API Key and SECRET
-   Step 4: Create Controller File
-   Step 5: Create Routes
-   Step 6: Create Webhook
-   Step 7: Testing

## Step 1: Install fresh new Laravel application

composer create-project laravel/laravel stripe-payment

## Step 2: Install stripe-php Package

In this step we need to install stripe-php via the Composer package manager, so one your terminal and fire below command.

composer require stripe/stripe-php

## Step 3: Set Stripe API Key and SECRET

Now, we need to set stripe key and secret. so first you can go on Stripe website and create development stripe account key and secret and add below.

.env

STRIPE_KEY=pk_test_reFxwbsm9cdCKASdTfxAR
STRIPE_SECRET=sk_test_oQMFWteJiPd4wj4AtgApY

## Step 4: Create Controller File

In next step, now we have create new controller as StripePaymentController and write method on it like as in the product.

app/Http/Controllers/StripePaymentController.php

## Step 5: Create Routes

In this step, we will create two routes in routes/web.php , for get request and another for post request. So, let’s add new route on that file.

## Step 6: Create Webhook Controller To handle stripe response after payment

In next step, now we have create new controller as WebHookController and write method to handle webhook response as needed.

## Step 7: Testing

All steps have been done, now you have to type the given command and hit enter to run the laravel app:

php artisan serve
