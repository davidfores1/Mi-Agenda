<?php 
      
       class agendaControl{

       
      public function registro(){
   	    if(isset($_POST['submit'])){ 
   	   	  $nom = $_POST['nombre'];
   	   	  $dom = $_POST['domicilio'];
   	   	  $tel = $_POST['telefono'];
   	   	  $com = $_POST['comentarios'];

       $agenda = new Agenda($nom,$dom,$tel,$com);
       $agenda->insert();


       }    
    }

    public $editar;

    public function editar(){

       $id = $this->editar;
       $agenda = Agenda::soloId($id);
       $array = $agenda->selectId();
       
       echo json_encode($array);
    }  

    public function selectUpdate(){
      
      
      if(isset($_POST['submit'])){ 
      if($_POST['accion']=='update'){

        
             $nom = $_POST['nombre'];
             $dom = $_POST['domicilio'];
             $tel = $_POST['telefono'];
             $com = $_POST['comentarios'];
             $id = $_POST['id'];
  
  
          $agenda = new Agenda($nom,$dom,$tel,$com, $id);
          $agenda->update();
  
      }
    }
  }
}

if(isset($_GET["editar"])){

$edita = new agendaControl();   
$edita-> editar = $_GET['editar'];
$edita-> editar();

}