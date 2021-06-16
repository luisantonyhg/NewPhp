<?php


class Usuario{
    

    public $email;
    public $contraseña ;
    public $cip;
    public $codofin ;
    public $grado ;
    public $dni ; 
    public $fechanacimiento ;
    public $nombre ;
    public $apellido;
    public $caf;
    


    public function  __construct()
    
    {

        $this->email ="Luis Antony";
        $this->contraseña = "huamanculi";
        $this->cip = 32143695;
        $this->codofin =  1160307074;
        $this->grado = "S3 PNP";
        $this->dni = 71112652; 
        $this->fechanacimiento ="14/04/1998";
        $this->nombre ="Luis Antony";
        $this->apellido ="GONZALES";
        $this->caf = 1231244;
        


    }



    public function getMaspol()
    {
        return "Su numero de cip es $this->cip y Su codofin es $this->codofin siendo el SubOficial Huamanculi su $this->grado";
       
    }

    public function getReniec()
    {
        return "Su numero DNI es $this->dni y Su fecha de Nacimiento es $this->fechanacimiento siendo su nombre es $this->nombre Su Apellido es $this->apellido";
        
    }
 
    public function getSucamec()
    {
       return "Su CAF es $this->caf";
    }


}


$personal = new Usuario();
echo $personal->getMaspol();
echo "<br>";
echo "<br>";
echo $personal->getReniec();
echo "<br>";
echo "<br>";
echo $personal->getSucamec();
echo "<br>";