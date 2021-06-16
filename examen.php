<?php

define('PAPA', 'luis Antony');

echo PAPA;
$i= 1;
$arreglos =  ["luis", "papa", "listo", "mama"];

// foreach ($arreglos as $arreglo) {
//     echo $arreglo ."<br>";
// }



for ($i = 0, $total = sizeof($arreglos); $i < $total; $i++){
    echo $arreglos[$i]. "<br>";
}



?>