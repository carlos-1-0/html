<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/general1.css">
    <title>Creacion de marca</title>
</head>

<body>
    <?php
	include "principa.php";
	?>
        <form method="post" class="formulario" action="Marca.php">
            <h1>Datos de la marca</h1>
            <fieldset>
                <input type="text" name="nombre" placeholder="Nombre de la marca">
                <br><br>
                <input type="number" name="producto" placeholder="id del producto">
                <br><br>
                <input type="number" name="Almacen" placeholder="id del almacen">
                <br><br>
                <input type="number" name="Ventas" placeholder="id de las ventas">
                <br><br>
                <input type="number" name="Compra" placeholder="id de compra">
                <br><br>
                <input type="submit" value="Guardar en la base">
            </fieldset>
        </form>
</body>

</html>
<?php
if($_POST)
	{
	include "conexion.php";
	// invoco la funcion de conectar
		$nombre = $_POST['nombre'];
		$Id_producto = $_POST['producto'];
		$Id_almacen = $_POST['Almacen'];
		$Id_ventas = $_POST['Ventas'];
		$Id_Compra = $_POST['Compra'];
		
		function insertar($nom, $idp,$ida,$idv,$idc){
			$conexion = conectar();
			$sql = "insert into marca(nombre_mar,Id_producto,Id_almacen,Id_ventas,Id_compra) value ('$nom','$idp','$ida','$idv','$idc')";
			$query = $conexion->query($sql);
			return $query;
		}
			
			if(insertar($nombre,$Id_producto,$Id_almacen,$Id_ventas,$Id_Compra) !=null){
				echo "<h2> Registro agregado correctamente </h2>";
			}else{
				echo "<h1> No se pudo agregar el registro </h1>";
			}
	}
?>