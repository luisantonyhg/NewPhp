<?php

/*
-------------------------------------------------------------
                           EXECEPCIONES
-------------------------------------------------------------
*/

function dividir ($a, $b = 0)
{
    if($b === 0)
    {
        throw new Exception("division por 0 controlada");
    }

     return $a / $b;
}

try {
    echo dividir (10);

} catch (Exception $exception) {
    echo $exception->getMessage();
} finally {
    echo "<br>";
    echo "Final";
}

function comprobarCorreoElectronico($email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception("EL FORMATO DEL CORREO ELECTRONICO NO ES CORRECTO");
        
    }
    return "correo electronico correcto!";
}

echo "<br>";

try{
    echo comprobarCorreoElectronico("app@cursodesarrolloweb.es");

} catch (Exception $exception){
    echo $exception->getMessage();
}



?>