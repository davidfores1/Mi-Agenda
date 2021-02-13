
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Mi agenda</title>
 	<link rel="stylesheet" type="text/css" href="vista/css/styles.css">
 	<link rel="stylesheet" type="text/css" href="vista/css/fonts.css">
 	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

 	</head>

 <body>
 	<header><a href="index.php"><h1>Mi Agenda</h1></a></header>
     <!--- Formulario-->
	 <form action="" method="post">
     	<div class="icon-user-plus"></div>
                	
	     <input type="text" name="nombre" placeholder="Nombre" required="required">
	 	 <input type="text" name="domicilio"placeholder="Dirección" required="required">
	 	 <input type="text" name="telefono" placeholder="Teléfono" required="required">
	 	 <textarea name="comentarios" required="required" placeholder="Comentarios" scrolling="yes"></textarea>
	 	
	 	 <input type="hidden" name="id">
         <input type="hidden" name="accion" >
	 	 <input type="submit" name="submit" value="Enviar">
	     </form>

		 <?php 
		 
		  $registro = new agendaControl();
		  $registro->registro();
		 
		 ?>
		       
          <!--- Formulario-->
 <table>
	<th>Nombre</th>
	<th>Domicilio</th>
	<th>Teléfono</th>
	<th>Comentarios</th>
	<th>Editar</th>
	<th>Eliminar</th>

	<?php  
      
      $agenda = Agenda::ningundato();

      $datos = $agenda->select();

      while($row = $datos->fetch_array()){
          echo '<tr>';
		  
          echo '<td>',$row['nombre'],'</td>';    
          echo '<td>',$row['domicilio'],'</td>';    
          echo '<td>',$row['telefono'],'</td>';    
          echo '<td>',$row['comentarios'],'</td>';    
          echo '<td> <input type="button" class="icon-pencil editar" idEditar="'.$row["id"].'"/></td>';
          echo '<td> <input type="button" class="icon-cross eliminar" idEditar="'.$row["id"].'"/></td>';

          echo '</tr>';

      }
          $up = new agendaControl();
		  $up->selectUpdate();
       
	?>
</table>

       <!-- <footer> David717@hotmail.es</footer>-->
       
	   <script src="vista/js/editar.js"></script>
	   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	   
 </body>
 </html>