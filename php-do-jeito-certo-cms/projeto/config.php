<?php

use Robsantossilva\ORM\Drivers\MysqlPdo;
use App\Models\Users;
use App\Models\Pages;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$container['view'] = function ($c) {
    $loader = new FilesystemLoader(__DIR__ . '/templates');
    $twig = new Environment($loader, [
        'cache' => __DIR__ . '/cache/templates',
        'debug' => true
    ]);
    return $twig;
};

$container['pdo'] = function ($c) {
    return new \PDO('mysql:host=php-db;dbname=curso_cms_php', 'root', 'root');
};

$container['model_user'] = $container->factory(function ($c) {
    $driver = new MysqlPdo($c['pdo']);
    $users = new Users;
    $users->setDriver($driver);
    return $users;
});

$container['model_page'] = $container->factory(function ($c) {
    $driver = new MysqlPdo($c['pdo']);
    $pages = new Pages;
    $pages->setDriver($driver);
    return $pages;
});
