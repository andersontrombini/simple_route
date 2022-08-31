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
    static function get(string $route, array $class_method)
    {
         if (!self::routeMatch($route)) {
              return;
         }

         $existeParametro = RouteService::checkIfRouteParams($route);
         //2. extrair o valor caso exista o parametro da request baseado no identificador da rota
         //3. chamar o metodo desejado passando o valro extraido como parametro do metodo

         $valorParametro = false;
         $class = new $class_method[0];
         $method = $class_method[1];
         if (!$existeParametro) {
              return $class->{$method}();
         }

         return $class->{$method}($valorParametro);
    }

    /**
     * post
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function post(string $route, array $class_method)
    {
    }

    /**
     * patch
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function patch(string $route, array $class_method)
    {
    }

    /**
     * put
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function put(string $route, array $class_method)
    {
    }

    /**
     * delete
     * Extracting informations and send to the class and method was chosen 
     * @param string $route
     * @param array $class_method
     * @return void
     */
    static function delete(string $route, array $class_method)
    {
    }

    /**
     * resource
     * Extracting informations(request), handling the request and splitting to the desired method
     * @param string $route
     * @param object $class
     * @return void
     */
    static function resource(string $route, string $class)
    {
    }


    /**
     * routeMatch
     * Check if the route clled is the same of web route
     * @param string $route
     * @return bool
     */
    static function routeMatch(string $route): bool
    {

         $request = new Request();
         $cleanRoute = RouteService::extractRoute($route);
         $cleanRequestedRoute = RouteService::extractRoute($request->path());
    
         if ($cleanRequestedRoute != $cleanRoute) {
              return false;
         }
         //verificar se a rota enviada na requisição é a mesma chamada no arquivo ropta
         return true;
    }
}