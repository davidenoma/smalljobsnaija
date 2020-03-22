<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => 'api.eu.mailgun.net',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'facebook'=>[
    'client_id'=> '571242500369625',
    'client_secret' => '74c4aae6ea15db143f3751de0ab19f48',
    'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ],
    
    'google'=>[ 
        'client_id'=> '97979443368-knvtfln7gji08rbvpnqlnr5jq8mkchqe.apps.googleusercontent.com',
        'client_secret' => 'lplfNvx9ry9WOP6tFskahy2a',
        'redirect' => 'http://localhost:8000/auth/google/callback'
        ] 
    
        



];
