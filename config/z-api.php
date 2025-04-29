<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Z-API Instances
    |--------------------------------------------------------------------------
    |
    | Define the Z-API instances your application will use. You may add as many
    | instances as needed and select one at runtime using `ZApi::instance($id)`.
    |
    */
    'instances' => [
        'default' => [
            'id' => env('ZAPI_INSTANCE_ID'),
            'token' => env('ZAPI_INSTANCE_TOKEN'),
            'client_token' => env('ZAPI_CLIENT_TOKEN'),
        ],
    ],
];
