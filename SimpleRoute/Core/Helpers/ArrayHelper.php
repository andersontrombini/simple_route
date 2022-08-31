<?php
namespace Andersontf\SimpleRoute\Core\Helpers;

class ArrayHelper {

    static function cleanArrayBySearch($array, $search)
    {
        $filteredArray = array_filter($array, function ($arrayIndex) use ($search){
            return $arrayIndex != $search;
        });
        return self::reorderByindex($filteredArray);
    }

    static function reorderByindex($array)
    {
        return array_values($array);
    }
}

?>