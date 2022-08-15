<?php

namespace Andersontf\SimpleRoute\Core\Routes;

class Route implements RouteInterface
{
     /**
     * get
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method - [0] = class ,[1] = method
     * @return void
     */
    static function get(string $route, array $class_method): string
    {
        $class = new $class_method[0];
        $method = $class_method[1];
        return $class->{$method}(); //colchetes reverte values to string for method
    }

    /**
     * post
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function post(string $route, array $class_method): string
    {
        return '';
    }

    /**
     * patch
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function patch(string $route, array $class_method): array
    {
        return [];
    }

    /**
     * put
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function put(string $route, array $class_method): string
    {
        return '';
    }

     /**
     * delete
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function delete(string $route, array $class_method): string
    {
        return '';
    }

     /**
     * resource
     * Extracting informations(request), handling the request and splitting to the desired method
     * @param string $route
     * @param object $class
     * @return void
     */
    static function resource(string $route, string $class): string
    {
        return '';
    }
}
