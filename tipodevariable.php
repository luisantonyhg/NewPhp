<?php

/*
-----------------------------------------------------------
                     TIPO DE VARIABLES
-----------------------------------------------------------
*/
/*
-----------------------------------------------------------
                     BOLEANO/TRUE O FALSE
-----------------------------------------------------------
*/

$boleano = true;
echo $boleano;
echo '<br />';
$boleano2 = false;
echo  $boleano2;
echo "<br>";


/*
-----------------------------------------------------------
        NUMERO O ENTERO/INTEGER POSITIVO O NEGATIVO
-----------------------------------------------------------
*/

$numero = 4;
$edad = 23;
echo $numero;
echo "<br>";


/*
-----------------------------------------------------------
                FLOTANTE O FLOAT/DECIMALES
-----------------------------------------------------------
*/

$decimal = 15.23;
echo $decimal;
echo "<br>";


/*
-----------------------------------------------------------
                       STRING O TEXTO 
-----------------------------------------------------------
*/


$texto1 = "Son de modo textos tambien";
echo $texto1;
echo "<br>";
$texto2 = 'Son de modo texto';
echo $texto2;
echo "<br>";
$usuario = "Luis Antony Huamani Gonzales";
echo $usuario;
echo "<br>";

/*
-------------------------------------------------------------
                       PARA IMPRIMIR EN PHP
-------------------------------------------------------------
*/

echo $usuario;
echo "<br />";
print_r($texto2);
echo "<br>";
var_dump($usuario);

/*
-------------------------------------------------------------
                       PARA DAR SALTO DE LINEA 
-------------------------------------------------------------
*/

 echo "<br>";
 echo "<br />";

/*
-------------------------------------------------------------
                       ARRAY O ARREGLOS
-------------------------------------------------------------
*/

$arreglos = array('pedro','pepito','carlitos','luis');

echo $arreglos[2];

echo '<br>';

$arreglo2 = ['carmen','mery','luz','maricarme'];

echo $arreglo2[0];
echo '<br>';

$arreglo3 = ["PHP", "JAVASCRIPT", "LARAVEL","VUE JS" , "REACT","NODE"];

echo $arreglo3[2];
echo "<br>";

echo '<pre>';
var_dump($arreglo3);

echo '</pre>';


/*
-------------------------------------------------------------
                       ARRAY ASOCIATIVO
-------------------------------------------------------------
*/


$arregloasociativo = [ 'carmen'=>'luis' , 'medina'=>'luis', 'carla'=>'paul'];

echo $arregloasociativo['carmen'];
echo '<br>';

$arregloasociativo2 = array('maria'=>'fernanda','celeste'=>'skipe');

echo $arregloasociativo2['celeste'];
echo '<br>';

/*
-------------------------------------------------------------
                       OBJETOS
-------------------------------------------------------------
*/
 $objeto = new stdClass;

 $objeto->nombre = "Antony Huamani";
 $objeto->edad = 39;

 echo $objeto->nombre;
 echo "<br>";
 


/*
-------------------------------------------------------------
                      NULO
-------------------------------------------------------------
*/

$nulo = NULL;
echo '<br>';




/*
-------------------------------------------------------------
        MANIPULACION DE TIPO CASTING (CONVERTIDOR)
                (int) (integer)
                (boolean) = (bool)
                (float)=(double)
                  (string)
                  (array)
                  (object)
-------------------------------------------------------------
*/


$price = '10.90 wine';

$prico = '5 wine';

$total = (int) $prico * (float) $price;

echo $total;

echo '<br>';


/*
-------------------------------------------------------------
        OBTENIDO LA INFORMACION DE VARIBLE 
-------------------------------------------------------------
*/

$texto = "pepito";
var_dump($texto);
echo "<br>";
$varexport = "carlos";
echo "<br>";
var_export($varexport);



?>