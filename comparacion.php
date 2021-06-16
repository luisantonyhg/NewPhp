<?php


/*
-------------------------------------------------------------
                       COMPARACION DE OPERADORES
-------------------------------------------------------------
*/

// $a === $b -> cuando es indentico en valor y tipo de dato
// $a == $b -> cuando son iguales
// $a != $b -> si son diferente en valor
// $a !== $b -> si son distintos en valor y en tipo de datos
// $a < $b -> menor que
// $a > $b -> mayor que
// $a <= $b -> menor o igual que
// $a >= $b -> mayor o igual que
// and o && -> significa Y
// or !!-> significa o
// xor -> no sean iguales las parte que separe
//  ! -> negacion entre parentesis !($a < $b); 
// count ->para contar cuanto tenemos dentro de un valor
// !!-> para saber si hay datos dentros ejemplo (!!array)

$a = 2;
$b = "2";
$c = $a + $b;

echo $c;
// var_dump($c);
echo '<br>';


/*
-------------------------------------------------------------
                CONDICIONAL -> IF, ELSEIF, ELSE
-------------------------------------------------------------
*/

if ($a !== $b) {
    echo 'true';
} else
{
    echo 'false';
}



?>