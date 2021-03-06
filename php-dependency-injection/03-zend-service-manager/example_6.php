<?php

require __DIR__ . '/../vendor/autoload.php';

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\ServiceManager;

class TestAdapter
{
    public function __construct()
    {
        var_dump(TestAdapter::class . '::__construct()');
    }

    public function runTest($message)
    {
        var_dump($message);
    }
}

class Tester
{
    public function __construct(TestAdapter $adapter)
    {
        $adapter->runTest('Rodou um teste');
    }
}

$serviceManager = new ServiceManager([
    'factories' => [
        'ta' => function (ContainerInterface $c) {
            return new TestAdapter;
        },
        'tester' => function (ContainerInterface $c) {
            return new Tester($c->get('ta'));
        },
    ]
]);


//get tras a mesma instancia gerada na primeira chamada
$tester1 = $serviceManager->get('tester');
$tester2 = $serviceManager->get('tester');

var_dump($tester1 === $tester2);
var_dump($tester1, $tester2);
