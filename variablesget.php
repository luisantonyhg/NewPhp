<?php

/*
-------------------------------------------------------------
                          VARIABLES GET
-------------------------------------------------------------
*/

$cupon = filter_var($_GET['cupon'], FILTER_SANITIZE_STRING);

if(!$cupon){
    var_dump("NO HAY CUPON");
}

echo $cupon;

echo "<br>";

$usuario = filter_var($_GET['usuarios'], FILTER_SANITIZE_STRING);

if(!$usuarios){
    var_dump("NO HAY USUARIO");
}

echo $usuario;




?>