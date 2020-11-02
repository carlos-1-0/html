<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/general1.css">
    <title>insertar embalaje</title>
</head>

<body>
    <?php
	include "principa.php";
	?>

        <form method="post" class="formulario" action="ingreso_producto.php">
            <h1>Ingrese Datos del Producto</h1>
            <br>
            <fieldset>
                <br>
                <input type="text" name="nombrepro" placeholder="Nombre Producto" required>
                <br>
                <input type="number" name="preciov" placeholder="Precio Venta" required>
                <br>
                <input type="number" name="precioc" placeholder="Precio Compra" required>
                <br>
                <input type="number" name="stockmax" placeholder="Stock Maximo" required>
                <br>
                <input type="number" name="stockmin" placeholder="Stock Minimo" required>
                <br>
                <input type="submit" value="Registrar Producto"><br><br>
            </fieldset>
        </form>
</body>

</html>
<?php
if($_POST)
	{
	include "conexion.php";
	
		$nombrepro = $_POST['nombrepro'];
		$preciov = $_POST['preciov'];
		$precioc = $_POST['precioc'];
		$stockmax = $_POST ['stockmax'];
		$stockmin = $_POST ['stockmin'];

		function insertar($nombp, $prev, $prec, $stockmax, $stockmin){
			$conexion = conectar();
			$sql = "insert into producto (nombre_prod, precio_ven, precio_comp, stock_max, stock_min) value ('$nombp', '$prev', '$prec', '$stockmax', '$stockmin')";
			$query = $conexion->query($sql);
			return $query;
		}
			
			if(insertar($nombrepro, $preciov, $precioc, $stockmax, $stockmin ) !=null){
				echo "<h1> Prodcuto agregado correctamente </h1>";
			}else{
				echo "<h1> No se pudo agregar el Prodcuto </h1>";
			}
	}
?>