<?php

namespace Andersontf\SimpleRoute\Core\Routes;

use Andersontf\SimpleRoute\Core\Requests\Request;

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
        //0.verificar se essa rota atende o parametro da URL

        if (self::routeMatch($route)) {
           
            //1. saber se temos parametros passados na url
            $existeParametro = RouteService::checkIfRouteParams($route);

            //2. extrair o valor caso exista o parametro da request baseado no identificador da rota
            //3. chamar o metodo desejado passando o valor extraido como parametro
            $valorParametro = false;
            $class =  new $class_method[0]();
            $method = $class_method[1];

            if (!$existeParametro) {
                return $class->{$method}(); //colchetes reverte values to string for method
            }

            return $class->{$method}($valorParametro);
        }
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

    /**
     * routeMatch
     * Check if the route called is the same of web route
     * @param string $route
     * @return bool
     */
    static function routeMatch(string $route): bool
    {
        $uri = $_SERVER['REQUEST_URI'];
        $cleanRoute = RouteService::extractRoute($route);
        $cleanRequestedRoute = substr($uri, 1);

        if ($cleanRoute == $cleanRequestedRoute) {
            return true;
        }
        return false;
    }
}
