<?php

namespace Robsantossilva;

use Pimple\Container;
use Robsantossilva\Router\Router;
use Robsantossilva\DI\Resolver;
use Robsantossilva\Renderer\PHPRendererInterface;

class App
{
    private $router;
    private $renderer;
    private $container;

    public function __construct()
    {
        $path_info = $_SERVER['PATH_INFO'] ?? '/';
        $request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $this->router = new Router($path_info, $request_method);
    }

    public function setRenderer(PHPRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function get(string $path, $fn)
    {
        $this->router->get($path, $fn);
    }

    public function post(string $path, $fn)
    {
        $this->router->post($path, $fn);
    }

    public function run()
    {
        $route = $this->router->run();
        $resolver = new Resolver;

        $data = $resolver->method($route['callback'], ['params' => $route['params']]);

        $this->renderer->setData($data);
        $this->renderer->run();
    }

    public function setContainer(Container $container)
    {
        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }
}
