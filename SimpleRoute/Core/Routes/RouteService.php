<?php

namespace Andersontf\SimpleRoute\Core\Routes;

use Andersontf\SimpleRoute\Core\Helpers\StringHelper;

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
        return StringHelper::explodeStringAndCleanArray($route)[0];
    }
}