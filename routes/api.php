<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
| 
| **** web.php file was removed, this server will only be resful api
*/

$router->get('/', function () use ($router) {
    return 'api!!!';
});
