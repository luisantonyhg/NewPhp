<?php

// ARREGLO INDEXADO

$a = array('pepito', 'carlos','sebastian');
    //       0         1          2

$b = ['carla','monchita','morena'];

//  ARREGLO ASOCIATIVO
$c = ['last' => 'luis', 'lastname'=>'huamani'];



$d = array('nissan'=>'tida','toyota'=>'corolla');
$e = array('wiliam'=>'smith', 'jeanpierre'=>'pupi');

//  ARREGLO BIDIMENSIONAL

$f = array('flores'=>'tulipanes', array('nombre'=>'huamanculi', array('novias'=>'carlos')));

echo '<pre>';
var_export($f);

echo '</pre>';

$new = $a + $b;



echo $a[1];
echo '<br>';
echo $c['lastname'];

echo '<pre>';

print_r($new);

?>