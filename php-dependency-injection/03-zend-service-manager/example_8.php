<?php

require __DIR__ . '/../vendor/autoload.php';

use Zend\ServiceManager\ServiceManager;

$serviceManager = new ServiceManager([
    'services' => [], //resultados de logicas complexas
    'factories' => [], //geração de classes
    'abstract_factories' => [], //Tras classes com base em regras
    'delegators' => [], //
    'shared' => [],
    'shared_by_default' => [],
]);
