<?php 

    return [
        'defaults' => [
                'guards' => 'api',
                'passwords' => 'users',
        ],

        'guards' => [
            'api' => [
                'driver' => 'jwt',
                'provider' => 'users',
            ],
        ],

        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => \App\User::class
            ]
        ]
    ];