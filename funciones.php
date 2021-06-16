<?php

/*
-------------------------------------------------------------
                           FUNCIONES
-------------------------------------------------------------
*/

function suma($a, $b){
    echo $a + $b;
}

suma(1,2);

echo '<br>';

suma(10,10);

echo "<br>";
/*
-------------------------------------------------------------
                           FUNCIONES CON NOMBRE
-------------------------------------------------------------
*/

function HolaMundo(){
    return "Hola Mundo con PHP 7";
}

echo HolaMundo();
echo "<br>";

/*
-------------------------------------------------------------
                           FUNCIONES ANONIMAS
-------------------------------------------------------------
*/


$hola = function(){
 return "hola desde la pagina web";
};

echo $hola();

echo "<br>";


/*
-------------------------------------------------------------
                           FUNCIONES CON PARAMETRO
-------------------------------------------------------------
*/

function saludar($nombre = "por aqui tambien"){
    return sprintf("Hola %s" , $nombre);
}

echo saludar("nuevamente por aqui :)");
echo "<br>";
echo saludar();
echo "<br>";


/*
-------------------------------------------------------------
                           ERROR DE FUNCION DE DIVISION
-------------------------------------------------------------
*/

// function division(...$entero) : int{
//     return intdiv($entero[0], $entero[1]);
// }
// echo division(...entero:10, 4);


/*
-------------------------------------------------------------
                           FUNCION DE RECORRER USUARIO
-------------------------------------------------------------
*/

// function recorrer(...$usuarios): string{
//     $resultado = '';
//     foreach ($usuarios as $usuario) {
//         $resultado .= "<br>{usuario}";
//     }
//     return $resultado;
// }
// echo recorrer(...usuarios: "usuario1", "usuario2", "usuario3");

?>