<?php

namespace Andersontf\SimpleRoute\Core\Helpers;

class StringHelper {
    static function explodeStringAndCleanArray(string $string): array
    {
        $explodedString = explode("/", $string);
        $cleanedArray = ArrayHelper::cleanArrayBySearch($explodedString,"");
        return $cleanedArray;
    }
}