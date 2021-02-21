<?php 
   
   require_once 'modelo/modelo.agenda.php';
   
  class agendaControl{

       
      public function registro(){

   	    if(isset($_POST['create'])){ 
   	   	  $nom = $_POST['nombre'];
   	   	  $dom = $_POST['domicilio'];
   	   	  $tel = $_POST['telefono'];
   	   	  $com = $_POST['comentarios'];

       $agenda = new Agenda($nom,$dom,$tel,$com);
       $agenda->insert();
       
       header("http://localhost/application/Mi-Agenda/index.php");
       }    
    }

      
    public function selectUpdate(){
      
      if(isset($_POST['update'])){ 
  

             $nom = $_POST['nombre'];
             $dom = $_POST['domicilio'];
             $tel = $_POST['telefono'];
             $com = $_POST['comentarios'];
             $id = $_POST['id'];
  
  
          $agenda = new Agenda($nom,$dom,$tel,$com, $id);
          $agenda->update();

          header("http://localhost/application/Mi-Agenda/index.php");

    }
  }
}
