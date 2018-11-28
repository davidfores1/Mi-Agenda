<?php 
       include 'modelo/agenda.php';


   if(isset($_POST['submit'])){

   	   if($_POST['accion']== 'insert'){
   	   	  $nom = $_POST['nombre'];
   	   	  $dom = $_POST['domicilio'];
   	   	  $tel = $_POST['telefono'];
   	   	  $com = $_POST['comentarios'];

       $agenda = new Agenda($nom,$dom,$tel,$com);
       $agenda->insert();
       
       }
            // echo '<pre>';
       // var_dump($nom);
       //  var_dump($dom);
       //  var_dump($tel);
       //  var_dump($com);
       //  echo '</pre>';
       


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
   

 ?>