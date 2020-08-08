<?php

    $router->group(['prefix' => 'api'], function () use ($router) {
        $router->group(['prefix' => 'cliente'], function () use ($router) {
            $router->get('/', 'CadastroClienteController@getAll');
            $router->post('/', 'CadastroClienteController@store');
            $router->post('/', 'AuthController@login');
        });
    });