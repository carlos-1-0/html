<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/general1.css">
	<title>Registro de almacen</title>
</head>
	<body>
		<?php
		include "principa.php";
		?>
	   
	 	<form method="post" class="formulario" action="almacen.php">
		 	<h1>Almacen</h1>
		 	<fieldset>
	       		<input type="text" name="nombre" placeholder="Nombre del Almacen">
	        		<br><br>
	        	<input type="text" name="lote" placeholder="Ubicacion del lote">
	        		<br><br>
	        		<center><h1>fecha de registro</h1></center>
	        	<input type="date" name="fecha_entrega" >
	        		<br><br>
	        	<input type="number" name="id_producto" placeholder="id del producto">
	        		<br><br>
	        	<input type="number" name="id_embalaje" placeholder="id del embalaje">
	        		<br><br>
        		<input type="submit"  value="Guardar en la base">
       		</fieldset>
	 	</form>    
	</body>
 </html>
 <?php
if($_POST){
	include "conexion.php";
	// invoco la funcion de conectar
		$nombre_alm = $_POST['nombre'];
		$lote = $_POST['lote'];
		$fecha_entrega = $_POST['fecha_entrega'];
		$id_producto = $_POST['id_producto'];
		$id_embalaje = $_POST['id_embalaje'];

		function insertar($nombre_alm,$lote,$fecha_entrega,$id_producto,$id_embalaje)
			{
			$conexion = conectar();
			$sql = "INSERT INTO almacen (nombre_alm,lote,fecha_ent,id_producto,id_embalaje) values ('$nombre_alm','$lote','$fecha_entrega','$id_producto','$id_embalaje')";
			
			$query = $conexion->query($sql);
			return $query;

		}
			
			if(insertar($nombre_alm,$lote,$fecha_entrega,$id_producto,$id_embalaje)!=null){
				echo "<h1> Registro agregado correctamente </h1>";
			}else{
				echo "<h1> No se pudo agregar el registro </h1>";
			}
	}
?>