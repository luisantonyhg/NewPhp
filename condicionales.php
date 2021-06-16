<?php
/*
-------------------------------------------------------------
                CONDICIONALES
-------------------------------------------------------------
*/

$a = 4;

$b = 3;

if ($a==$b) {
    echo 'si son iguales';
} elseif($a < $b){
    echo 'es mayor';
}
 else {
    echo 'no son iguales';
}

echo "<br>";

$a = 5;
$b = 10;

if($a > $b){
    echo "si es mayor";
} elseif($a < $b){
    echo "si es menor";
} else {
    echo "ninguna de la anteriores";
}

echo "<br>";

/*
-------------------------------------------------------------
        OPERADORES TERNARIOS CON CONDICIONES CON ??
-------------------------------------------------------------
*/


$name = "";

echo $name ? $name : "es un simio";

echo $name ?? "es un simio en laravel";

echo "<br>";

/*
-------------------------------------------------------------
                           SWITCH
-------------------------------------------------------------
*/

$a = 3;
$b = 5;

switch($a) {
   case 1:
    echo "enero";
   break;

   case 2:
    echo "febrero";
   break;

    case 3:
    echo "marzo";

    break;

    case 4:

    echo "abril";
    break;

    case 5:

    echo "mayo";

    break;

    default:
    echo "ninguno";
    break;  
    
}