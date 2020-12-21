<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/product', 'ProductsController@index');
$router->get('/product/{id}', 'ProductsController@show');
$router->post('/product', 'ProductsController@create');
$router->put('/product/{id}', 'ProductsController@update');
$router->delete('/product/{id}', 'ProductsController@delete');