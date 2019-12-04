<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contact Mail
    |--------------------------------------------------------------------------
    |
    | Email to send the messages sent by the people who fill the contact form
    |
    | Supported: Valid email adress. Example: "john.doe@example.com"
    |
    */

    'email' => env('CONTACT_MAIL', 'john.doe@example.com'),

    /*
    |--------------------------------------------------------------------------
    | Route
    |--------------------------------------------------------------------------
    |
    | route setting
    |
    */

    'routes' => [
        'web' => [
            'preview' => 'contact_form_mail_preview',
            'index' => 'contact',
            'store' => 'contact',
        ],

        'api' => [
            'store' => 'contact',
        ],
    ],
];
