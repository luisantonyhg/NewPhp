<?php

$name = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry';

// REMUEVE DE LA DERECHA
echo rtrim($name,'Lorem');
echo '<br>';

// REMUEVE DE LA IZQUIERDA

echo ltrim($name,'industry');

echo '<br>';
// PARA SUBTRAER

echo substr($name, 0,10);

echo '<br>';
// PARA REEMPLAZAR

$lastname = 'pedro margarito corre siempre';




$resultado = str_replace('margarito',$elcambio,$variabledelcontenido);