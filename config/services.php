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
        'region' => 'us-west-2',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => '7436efbe5bbbed8224ff',
        'client_secret' => 'c051c2e433470463c15d848e710679dea041ad68',
        'redirect' => 'http://getdev.co/login/github/callback',
    ],

    'facebook' => [
        'client_id' => '1999141110307001',
        'client_secret' => 'a0216fd5afdebcceeea5c923ab7b1f45',
        'redirect' => 'http://getdev.co/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '1065888901648-f3ifa79udqq1cb6fgj2a0i8v9oi6psq9.apps.googleusercontent.com',
        'client_secret' => 'Qzg-X2vUtVVeK_pxSepQRGec',
        'redirect' => 'http://getdev.co/login/google/callback', //https://console.developers.google.com/apis/credentials?highlightClient=1065888901648-f3ifa79udqq1cb6fgj2a0i8v9oi6psq9.apps.googleusercontent.com&project=getdev-179118
    ],

];
