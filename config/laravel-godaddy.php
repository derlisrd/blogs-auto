<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Required configuration
    |--------------------------------------------------------------------------
    |
    | Providing your GoDaddy API key and secret is a mandatory config step.
    | These can both be obtained from http://developer.godaddy.com/keys/
    |
    */

    'key'     => 'fYqhXUYbdEec_D9cePUFtgYBHXkwj9eK3Bu',
    'secret'  => 'L97gCxYcULRWEomted8hEu',
    'testing' => false,
    'debug'   => false,

    /*
    |--------------------------------------------------------------------------
    | Optional configuration
    |--------------------------------------------------------------------------
    |
    | Settings from here down are optional and required only if
    | you intend to use the GoDaddy::purchase() method call.
    |
    */

    'company-details' => [
        'name'         => 'John',
        'surname'      => 'Doe',
        'email'        => 'john.doe@example.com',
        'phone'        => '+48.111111111',
        'organization' => 'Corporation Inc.',
        'street'       => 'Street Ave. 666',
        'city'         => 'New York City',
        'country'      => 'US',
        'postal-code'  => '91111',
        'state'        => 'New York'
    ]
];
