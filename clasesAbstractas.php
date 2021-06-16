<?php
/*
-------------------------------------------------------------
                           CLASES ABSTRACTAS
-------------------------------------------------------------
*/

  abstract class UsuarioAbstracto{
      abstract public function edad($edad):int;
    
  }

  public function nombre($nombre): string {
      return $nombre;
  }

  public function apellido($apellido): string {

     return $apellido;
      
  }
  class Usuario extends UsuarioAbstracto 

  {

  }
  
  $usuario = new Usuario;
  echo sprintf(

    // format: '%s %s %d',

    $usuario->nombre(nombre:'israel'),
    $usuario->apellido(apellido :'parra'),

    $usuario->edad(edad:39)
      
  );








?>