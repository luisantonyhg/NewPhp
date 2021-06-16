<?php
/*
-------------------------------------------------------------
                           CLASES EN PHP
-------------------------------------------------------------
*/


class Usuario{


     public $int;
     



     public $usuarios;

     

     public function __construct(int $id)
     
     {
        $this->id=$id;
        $this->usuarios=['luis','Carlos','Andres'];  
     }

     public function getNombre():string{
         return $this->usuarios[$this->id];
     }
     
     public function recorrerUsuarios():string
      {
         $resultado = '';
         foreach ($this->usuarios as $usuario) {
             $resultado .= "<br>{$usuario}";
         }
         return $resultado;
     }

     public function encontrarUsuario(int $id = null): string 
     {
          return $this->usuarios[$id ?? $this->id];
     }

}

$usuario = new Usuario(1);
echo $usuario->id;
echo "<br>";

echo "<pre>";
var_dump($usuario->usuarios);
echo "</pre>";

echo "<br>";

echo $usuario->getNombre();
echo "<br>";
echo $usuario->recorrerUsuarios();
echo "<br>";
echo $usuario->encontrarUsuario(1);
echo "<br>";
echo "<br>";

/*
-------------------------------------------------------------
                           CLASES DE EJERCICIOS DE PAYTAN
-------------------------------------------------------------
*/



class Zapato{

    public $color;
    public $tipo;

    public function __construct()
    {
        $this->color = "POR DEFINIR";
        $this->tipo = "POR DEFINIR";
    }

     public function getTallaColor()
     {
          return "la color de Zapato es $this->color y el tipo es $this->tipo";
     }

     public function getCantidad($cantidad)
     {
         return "la cantidad que requiere es $cantidad de $this->tipo";
     }
    
}




$zapato = new Zapato();
echo $zapato->color = "rojo";
echo '<br>';
echo $zapato->tipo = "medianos";
echo '<br>';
echo $zapato->getTallaColor();
echo '<br>';
echo $zapato->getCantidad(2);



 
?>