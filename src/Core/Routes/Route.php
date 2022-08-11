<?php

namespace Andersontf\SimpleRoute\Core\Routes;

class Route implements RouteInterface
{
    public $route;

    public $class_method;

    public function __construct()
    {
        $this->route = $_SERVER['REQUEST_URI'];
        $this->class_methos = $_SERVER['REQUEST_METHOD'];
    }

    static function get(string $route, array $class_method): string
    {
        return '';
    }

    static function post(string $route, array $class_method): string
    {
        return '';
    }

    static function patch(string $route, array $class_method): array
    {
        return [];
    }

    static function put(string $route, array $class_method): string
    {
        return '';
    }

    static function delete(string $route, array $class_method): string
    {
        return '';
    }

    static function resource(string $route, string $class): string
    {
        return '';
    }
}
