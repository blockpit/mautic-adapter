<?php

return [
    /*
    |--------------------------------------------------------------------------
    | MAUTIC ADDRESS
    |--------------------------------------------------------------------------
    | Don't forget to set this in your .env file
    |
    */
    'mautic_address' => env('MAUTIC_ADDRESS'),

    /*
    |--------------------------------------------------------------------------
    | MAUTIC USER NAME
    |--------------------------------------------------------------------------
    | Don't forget to set this in your .env file
    |
    */
    'user_name' => env('MAUTIC_USER'),

    /*
    |--------------------------------------------------------------------------
    | MAUTIC USER PASSWORD
    |--------------------------------------------------------------------------
    |
    | The passphrase for your private key. Can be null if none set.
    |
    */
    'password' => env('MAUTIC_PASSWORD'),
];
