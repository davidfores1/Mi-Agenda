<?php

require '../modelo/modelo.agenda.php';

class AgendAxios{

    public $editar;

    public function editar(){

      $id = $_GET['editar'];
      $agenda = Agenda::soloId($id);
      $array = $agenda->selectId();
      $datos = $array->fetch_array();

      echo json_encode($datos);
    } 


    public $eliminar;

    public function eliminar(){
    
      $id = $_GET['eliminar'];
      $agenda = Agenda::soloId($id);
      $array = $agenda->delete();
     
    } 


}

if(isset($_GET["editar"])){

    $edita = new AgendAxios();   
    $edita-> editar = $_GET['editar'];
    $edita-> editar();
    
}

if(isset($_GET["eliminar"])){

   $eliminar = new AgendAxios();   
   $eliminar-> eliminar = $_GET['eliminar'];
   $eliminar-> eliminar();
  
}