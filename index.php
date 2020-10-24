<?php 
include_once 'modelo/agenda.php';

$datos = array('nombre'=>'','domicilio'=>'','telefono'=>'','comentarios'=>'','id'=>'');
include 'get.php';
$accion = 'insert';

 // include_once 'config/conexion.php';

 // $db = new Conexion();

 ?>

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
     <form action="post.php" method="post">
     	<div class="icon-user-plus"></div>
                	
	     <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="required">
	 	 <input type="text" name="domicilio" value="<?php echo $datos['domicilio']; ?>" placeholder="Dirección" required="required">
	 	 <input type="text" name="telefono" value="<?php echo $datos['telefono']; ?>" placeholder="Teléfono" required="required">
	 	 <textarea name="comentarios" required="required" placeholder="Comentarios" scrolling="yes"><?php echo $datos['comentarios'];?></textarea>
	 	
	 	 <input type="hidden" name="id" value="<?php echo $datos['id'] ?>">
         <input type="hidden" name="accion" value="<?php echo $accion ?>">
	 	 <input type="submit" name="submit" value="Enviar">
	     </form>

       <?php include 'vista/modulos/tabla.php'; ?>
       <footer> David717@hotmail.es</footer>
 	
 </body>
 </html>