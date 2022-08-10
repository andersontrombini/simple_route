<?php

include "vendor/autoload.php";

use Andersontf\SimpleRoute\Core\Requests\Request;

$request = new Request();
print_r('<pre>');
print_r($request->accepts());

?>



