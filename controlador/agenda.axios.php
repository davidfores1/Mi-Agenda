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

}

if(isset($_GET["editar"])){

    $edita = new AgendAxios();   
    $edita-> editar = $_GET['editar'];
    $edita-> editar();
    
}