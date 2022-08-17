<?php

namespace Andersontf\SimpleRoute\Core\Routes;

class RouteService {

    static function getRouteParams($route)
    {
       return true;
    }

    static function checkIfRouteParams(string $route)
    {
        return \strpos($route, '{');
    }

    static function extractRoute(string $route):string
    {
        return explode('/', $route)[0];
    }
}