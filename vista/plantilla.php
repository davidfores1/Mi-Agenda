
 <!DOCTYPE html>

 <html>
 
  <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Mi agenda</title>
 	<link rel="stylesheet" type="text/css" href="vista/css/styles.css">
 	<link rel="stylesheet" type="text/css" href="vista/css/fonts.css">
 	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </head>

 <body>

 	<header><a href="index.php"><h1>Mi Agenda</h1></a></header>
     <!--- Formulario-->
	 <form action="" method="post">
     	<div class="icon-user-plus"></div>
                	
	     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="required"><br>
	 	 <input type="text" class="form-control" id="domicilio" name="domicilio"placeholder="Dirección" required="required"><br>
	 	 <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required="required"><br>
	 	 <textarea name="comentarios" class="form-control" id="comentarios" required="required" placeholder="Comentarios" scrolling="yes"></textarea><br>
	 	
	 	 <input type="hidden" id="id" name="id">
         <!-- <input type="hidden" name="accion" > -->
	 	 <input type="submit" class="btn btn-info" id="enviar" name="create" value="Enviar">
	</form>

		 <?php 
		 
		  $registro = new agendaControl();
		  $registro->registro();
		  $registro->selectUpdate(); 
		 
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
          echo '<td> <input type="button" class="btn btn-info editar" idEditar="'.$row["id"].'"/></td>';
          echo '<td> <input type="button" class="btn btn-danger eliminar" idEliminar="'.$row["id"].'"/></td>';

          echo '</tr>';

      }
          $up = new agendaControl();
		  $up->selectUpdate();
       
	?>
</table>

       <!-- <footer> David717@hotmail.es</footer>-->
       
	   <script src="vista/js/agenda.js"></script>
	   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	   
 </body>
 </html>