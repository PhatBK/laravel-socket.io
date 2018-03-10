<?php

return [

	/*
		    |--------------------------------------------------------------------------
		    | Third Party Services
		    |--------------------------------------------------------------------------
		    |
		    | This file is for storing the credentials for third party services such
		    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
		    | default location for this type of information, allowing packages
		    | to have a conventional place to find your various credentials.
		    |
	*/

	'mailgun' => [
		'domain' => env('MAILGUN_DOMAIN'),
		'secret' => env('MAILGUN_SECRET'),
	],

	'ses' => [
		'key' => env('SES_KEY'),
		'secret' => env('SES_SECRET'),
		'region' => 'us-east-1',
	],

	'sparkpost' => [
		'secret' => env('SPARKPOST_SECRET'),
	],

	'stripe' => [
		'model' => App\User::class,
		'key' => env('STRIPE_KEY'),
		'secret' => env('STRIPE_SECRET'),
	],
	'google' => [
		'client_id' => '269234388591-k9t1oelmhdr0v3c1heqbk9948695sue5.apps.googleusercontent.com',
		'client_secret' => 'buj-Btzrw8XN0tXl952LhIMy',
		'redirect' => 'http://bkcook.ddns.net/bkcook.vn/public/login/google/callback',
	],

];
