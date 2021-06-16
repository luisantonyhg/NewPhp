<?php
/*
-------------------------------------------------------------
                           INTERFACES
-------------------------------------------------------------
*/
interface ICrud {
    
    public function get();
    public function find($id);
    public function create($array);
    public function update($array);
    public function delete($id);
}


class Crud implements ICrud 
{
 public function get()
 {
     return "OBTENER TODOS LOS DATOS DE LOS USUARIOS";
 }
 public function find($id)
 {
     return "OBTENER EL USUARIO CON EL ID {$id}";
 }
 public function create($array)
 {
     return serialize($array);
 }

 public function update($array)
 {
   return serialize($array);
 }
 public function delete($id)
 {
  return "PARA PODER BORRAR O ELIMINAR UN USUARIO CON EL ID {$id}";
 }

}





$crud = new Crud;
echo $crud->get();
echo "<br>";
echo $crud->find(2);
echo "<br>";
echo $crud->create(["luis", 40]);
echo "<br>";
echo $crud->update([1,"luis",39]);
echo "<br>";
echo $crud->delete(1);

?>