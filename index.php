<?php
include "core/Requests/Request.php";

$request = new Request();
print_r($request->input('nome'));
print_r('<br>');
print_r($request->input('sobrenome'));
print_r('<br>');
print_r($request->has('contato'));
die;

?>



