 <!DOCTYPE html>

 <html>
 
  <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Mi agenda</title>
 	
	<link rel="stylesheet" type="text/css" href="vista/css/styles.css">
 	<link rel="stylesheet" type="text/css" href="vista/css/fonts.css">
 	
     <!--bootstrap  -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	
  </head>

 <body>

 	<header><a href="index.php"><h1>Mi Agenda</h1></a></header>
     <!--- Formulario-->
	 <form action="" method="post">
     	<div class="icon-user-plus"></div>
                	
	     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="required"><br>
	 	 <input type="text" class="form-control" id="domicilio" name="domicilio"placeholder="Dirección" required="required"><br>
	 	 <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required="required"><br>
	 	 <textarea name="comentarios" class="form-control" id="comentarios" required="required" placeholder="Comentarios" scrolling="yes"></textarea><br>
	 	
	 	 <input type="hidden" id="id" name="id">
		 
	 	 <input type="submit" class="btn btn-primary enviar" id="enviar" name="create" value="Registrar"/>
		 <button type="button" class="btn btn-secondary " id="cancelar" name="cancelar">Cancelar</button>
	</form>

		 <?php 
		 
		  $registro = new agendaControl();
		  $registro->create();
		  $registro->updateSelect(); 
		 
		 ?>    
          <!--- Tabla de datos-->
 <table>

	<th>Nombre</th>
	<th>Domicilio</th>
	<th>Teléfono</th>
	<th>Comentarios</th>
	<th colspan="2">Opciones</th>
	

	<?php  
      
      $datos = agendaControl::view();

      while($row = $datos->fetch_array()){
          echo '<tr>';
		  
          echo '<td>',$row['nombre'],'</td>';    
          echo '<td>',$row['domicilio'],'</td>';    
          echo '<td>',$row['telefono'],'</td>';    
          echo '<td>',$row['comentarios'],'</td>';    
          echo '<td> <button  type="button" class="btn btn-info editar" idEditar="'.$row["id"].'">Editar</button></td>';
          echo '<td> <button  type="button" class="btn btn-danger eliminar" idEliminar="'.$row["id"].'">Eliminar</button></td>';

          echo '</tr>';

      }
          
	?>
</table>
       
	   <script src="vista/js/agenda.js"></script>
	   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	   
 </body>
 </html>