<?php
/*
-------------------------------------------------------------
                           EJERCICIOS Nª 1
-------------------------------------------------------------
*/
class Efectivo{

    public $nombre;
    public $sueldo;
    public $p1 = 1;
    public $p = 3000;
    public $num = 3;

    public function __construct()
    {
        $this->nombre = "Huamanculi";
        $this->sueldo = "900 soles";
    }

     public function getIniciar()
     {
          return "El Personal $this->nombre  tiene como sueldo $this->sueldo como sueldo minimo";
     }

     public function getPagar()
     {
         return $this->nombre;
        

         

     }

     
    
}

$personal = new Efectivo();
echo "<br>";
echo $personal->getIniciar();
echo "<br>";
echo $personal->getPagar();
echo "<br>";


/*
-------------------------------------------------------------
                           EJERCICIOS Nª 2
-------------------------------------------------------------
*/

class Cuadrado extends Efectivo
{

    public function calcularCubo()
    {
        return "calculando el cubo";
        
    }
    
}

$objeto = new Cuadrado();
echo $objeto->num = 3;
echo "<br>";
echo $objeto->calcularCubo();
echo "<br>";

?>