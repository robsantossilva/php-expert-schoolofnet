<?php
require __DIR__ . '/vendor/autoload.php';

use Pimple\Container;

$app = new Robsantossilva\App;
$app->setRenderer(new Robsantossilva\Renderer\PHPRenderer);

$container = new Container();

require __DIR__ . '/config.php';

$app->setContainer($container);

require __DIR__ . '/routes.php';

$app->run();

//php -S localhost:8080
