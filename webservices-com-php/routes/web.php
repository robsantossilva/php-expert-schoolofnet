<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Laminas\Soap\AutoDiscover;
use Laminas\Soap\Client;
use Laminas\Soap\Server;

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
    'prefix' => 'api/clients',
    'namespace' => '\App\Http\Controllers'
], function () use ($router) {
    $router->get('/', 'ClientsController@index');
    $router->get('/{id}', 'ClientsController@show');
    $router->post('', 'ClientsController@store');
    $router->put('/{id}', 'ClientsController@update');
    $router->delete('/{id}', 'ClientsController@destroy');
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

// Teste SOAP
$router->get('tcu', function () {
    $client = new Client('http://contas.tcu.gov.br/debito/CalculoDebito?wsdl');
    echo "Options";
    print_r($client->getOptions());

    echo "\n\n";
    echo "Function";
    print_r($client->getFunctions());

    echo "\n\n";
    echo "Types";
    print_r($client->getTypes());

    echo "\n\n";
    echo "Result: ";
    print_r($client->obterSaldoAtualizado([
        'parcelas' => [
            'parcela' => [
                'data' => '1995-01-01',
                'tipo' => 'D',
                'valor' => 35000,
            ]
        ],
        'aplicaJuros' => true,
        'dataAtualizacao' => '2016-08-08',
    ]));
});

$uri = 'http://localhost:8000';

$router->get('soap-soma', function () use ($uri) {
    $client = new Client("$uri/son-soap", [
        'cache_wsdl' => WSDL_CACHE_NONE
    ]);
    print_r($client->soma(2, 5));
});


// Server and client SOAP


$router->get('son-soap', function () use ($uri) {
    $autoDiscover = new AutoDiscover();
    $autoDiscover->setUri("$uri/server");
    $autoDiscover->setServiceName('SONSOAP');
    $autoDiscover->addFunction('soma');
    $autoDiscover->handle();
});

$router->post('server', function () use ($uri) {
    $server = new Server("$uri/son-soap", [
        'cache_wsdl' => WSDL_CACHE_NONE
    ]);
    $server->setUri("$uri/server");
    return $server
        ->setReturnResponse(true)
        ->addFunction('soma')
        ->handle();
});

/**
 * @param int $num1
 * @param int $num2
 * @return int
 */
function soma($num1, $num2)
{
    return $num1 + $num2;
}
