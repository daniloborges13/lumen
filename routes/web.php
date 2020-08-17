<?php

/**
 * @var \Laravel\Lumen\Routing\Router $router
 */


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'cliente'], function () use ($router) {
        $router->get('/', 'CadastroClienteController@getAll');
        $router->post('/', 'CadastroClienteController@store');
    });
    $router->group(['prefix' => 'empresa'], function () use ($router) {
        $router->get('/', 'CadastroEmpresaController@store');
    });
    $router->post('login', 'AuthController@login');
});
