<?php

$router->group(['prefix' => 'user'], function () use ($router) {
    $router->get('register', 'UserController@register');
    $router->get('{userID}', 'UserController@status');
});

$router->get('/test-api', function () use ($router) {
    echo "working";
});

$router->get('{any}', 'HomeController@error');