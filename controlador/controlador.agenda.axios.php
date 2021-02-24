<?php

require '../modelo/modelo.agenda.php';

class AgendAxios{

 
    public function editar(){

      $id = $_GET['editar'];
      $agenda = Agenda::soloId($id);
      $array = $agenda->selectId();
      $datos = $array->fetch_array();

      echo json_encode($datos);
    } 


    public function eliminar(){
    
      $id = $_GET['eliminar'];
      $agenda = Agenda::soloId($id);
      $array = $agenda->delete();
     
    } 


}

if(isset($_GET["editar"])){

    $edita = new AgendAxios();   
    $edita-> editar();
    
}

if(isset($_GET["eliminar"])){

   $eliminar = new AgendAxios();   
   $eliminar-> eliminar();
  
}