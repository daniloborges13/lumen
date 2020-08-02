<?php

    $router->group(['prefix' => 'api'], function () use ($router) {
        $router->group(['prefix' => 'cliente'], function () use ($router) {
            $router->get('/', 'appFoodController@getAll');
        });
    });