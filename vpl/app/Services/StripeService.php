<?php

namespace App\Services;

use App\Models\User;
use Stripe\StripeClient;
use Throwable;

class StripeService
{
    protected $client;

    public function __construct()
    {
        $this->client = new StripeClient(config('services.stripe.secret'));
    }

    public function create_customer(User $user)
    {
        if (! empty($user->stripe_customer_id)) {
            return $user->stripe_customer_id;
        }

        $result = $this->client->customers->search([
            'query' => "email:'{$user->email}'",
        ]);

        if (count($result->data) > 0) {
            $user->stripe_customer_id = $result->data[0]->id;
            $user->save();

            return $user->stripe_customer_id;
        }

        $stripe_customer = $this->client->customers->create([
            'name' => $user->name,
            'email' => $user->email,
        ]);

        $user->stripe_customer_id = $stripe_customer->id;
        $user->save();

        return $stripe_customer->id;
    }

    public function add_card(
        string $payment_method_id,
        string $stripe_customer_id
    ) {
        $payment_method = $this->client->paymentMethods->attach(
            $payment_method_id,
            ['customer' => $stripe_customer_id]
        );

        return true;
    }

    public function detach_card(string $payment_method_id)
    {
        $this->client->paymentMethods->detach($payment_method_id);
    }

    public function charge_card(
        string $payment_method_id,
        string $stripe_customer_id,
        float $amount
    ) {
        $payment = $this->client->paymentIntents->create([
            'amount' => $amount * 100,
            'currency' => 'usd',
            'customer' => $stripe_customer_id,
            'payment_method' => $payment_method_id,
            'off_session' => true,
            'confirm' => true,
        ]);

        return $payment;
    }

    public function refund_charge(string $charge_id)
    {
        $charge = $this->client->refunds->create(['charge' => $charge_id]);

        return $charge->id;
    }
}
