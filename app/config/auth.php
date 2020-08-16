<?php 

    return [
        'defaults' => [
                'guards' => 'api',
                'passwords' => 'users',
        ],

        'guards' => [
            'user' => [
                'driver' => 'session',
                'provider' => 'user',
            ],
        ],
        'client' => [
            'driver' => 'session',
            'provider' => 'client',
         ],

        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => \App\User::class
            ]
        ]
    ];
    
