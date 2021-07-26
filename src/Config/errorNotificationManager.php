<?php

return [
    /*
    |--------------------------------------------------------------------------
    | logNeedles
    |--------------------------------------------------------------------------
    |
    | These phrases will be tracked in repositories logs and notifications will be sent, if they are detected
    |
    */
    'logNeedles' => [
        'The rate-limit per minute has been exceeded',
        'The cost limit has been exceeded'
    ],
    'errorNeedles' => [
        'try to get property type of non object'
    ],
    'notifiableExceptions' => [
        'NotifiableException'
    ]
];
