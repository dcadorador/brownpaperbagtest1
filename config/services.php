<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'keap' => [
        'key'              => env('INFUSIONSOFT_CLIENT_ID'),
        'secret'           => env('INFUSIONSOFT_CLIENT_SECRET'),
        'order_interval'   => env('KEAP_ORDER_INTERVAL', 15),
        'payment_interval' => env('KEAP_PAYMENT_INTERVAL', 14)
    ],

    'qbo' => [
        'key'      => env('QBO_CLIENT_ID'),
        'secret'   => env('QBO_CLIENT_SECRET'),
        'base_url' => env('QBO_BASE_URL'),
    ]
];
