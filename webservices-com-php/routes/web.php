<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group([
    'prefix' => 'api/clients/{clientId}/addresses',
    'namespace' => '\App\Http\Controllers'
], function () use ($router) {
    $router->get('/', 'AddressesController@index');
    $router->get('/{id}', 'AddressesController@show');
    $router->post('', 'AddressesController@store');
    $router->put('/{id}', 'AddressesController@update');
    $router->delete('/{id}', 'AddressesController@destroy');
});
