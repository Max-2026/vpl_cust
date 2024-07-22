<?php

namespace App\Services;

use Throwable;
use App\Models\User;
use App\Models\UserCard;
use App\Exceptions\StripeApiException;

use Stripe\StripeClient;

class StripeService
{
	protected $client;

	public function __construct()
	{
		$this->client = new StripeClient(config('services.stripe.secret'));
	}

	public function create_customer(User $user)
	{
		if (!empty($user->stripe_customer_id)) {
			return $user->stripe_customer_id;
		}

		try {
			$result = $this->client->customers->search([
			  'query' => "email:'{$user->email}'",
			]);
		} catch (Throwable $e) {
			throw new StripeApiException();
		}

		if (count($result->data) > 0) {
			$user->stripe_customer_id = $result->data[0]->id;
			$user->save();

			return $user->stripe_customer_id;
		}

		try {
			$stripe_customer = $this->client->customers->create([
				'name' => $user->name,
				'email' => $user->email
			]);

			$user->stripe_customer_id = $stripe_customer->id;
			$user->save();

			return $stripe_customer->id;
		} catch (Throwable $e) {
			throw new StripeApiException();
		}
	}

	public function add_card(
		string $payment_method_id,
		string $stripe_customer_id
	)
	{
		try {
			$payment_method = $this->client->paymentMethods->attach(
				$payment_method_id,
				['customer' => $stripe_customer_id]
			);
		} catch (Throwable $e) {
			throw new StripeApiException();
		}

		$user = User::where('stripe_customer_id', $stripe_customer_id)->first();
		$card = new UserCard();
		$card->stripe_payment_id = $payment_method->id;
		$card->brand = $payment_method->card->brand;
		$card->expiry_month = $payment_method->card->exp_month;
		$card->expiry_year = $payment_method->card->exp_year;
		$card->last_digits = $payment_method->card->last4;
		$user->cards()->save($card);

		return $card;
	}

	public function detach_card(string $payment_method_id)
	{
		try {
			$this->client->paymentMethods->detach($payment_method_id);
		} catch (Throwable $e) {
			throw new StripeApiException();
		}
	}

	public function charge_card(
		string $payment_method_id,
		string $stripe_customer_id,
		float $amount
	)
	{
		try {
			$payment = $this->client->paymentIntents->create([
				'amount' => $amount * 100,
				'currency' => 'usd',
				'customer' => $stripe_customer_id,
				'payment_method' => $payment_method_id,
				'confirm' => true,
				'automatic_payment_methods' => [
					'enabled' => true,
					'allow_redirects' => 'never'
				],
				// 'shipping' => []
			]);

			return $payment;
		} catch (Throwable $e) {
			throw new StripeApiException();
		}
	}

	public function refund_charge(string $charge_id)
	{
		try {
			$charge = $this->client->refunds->create(['charge' => $charge_id]);

			return $charge->id;
		} catch (Throwable $e) {
			throw new StripeApiException();
		}
	}
}
