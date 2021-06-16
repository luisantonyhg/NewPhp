<?php

/*
-------------------------------------------------------------
                           EJEMPLOS DE CLASES II
-------------------------------------------------------------
*/


class Database {
    
    public $name = "pruebas";

    public function __construct()
    {
        
    }

    public function select(): string {
        return "SELECT * FROM usuarios"; 
    }
    
}

class Usuario {

    
     public function __construct(Database $database) 
     {
 
        $this->database = $database;
     }

     public function selectUsuario(): string{
         return $this->database->select();
     }

     public function __toString()
     {
         return serialize($this->database);
     }

     
     

}

$db = new Database;
echo "<br>";
$usuario = new Usuario($db);
echo "<br>";
echo "<pre>";
echo $usuario;
echo "</pre>";
echo "<br>";
echo $usuario->selectUsuario();

?>