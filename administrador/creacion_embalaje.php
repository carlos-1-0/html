<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/general1.css">
    <title>Insertar embalaje</title>
</head>

<body>
    <?php
	include "principa.php";
	?>

        <form method="post" class="formulario" action="creacion_embalaje.php">
            <h1>Tipo de embalaje</h1>
            <fieldset>
                <input type="text" name="nombre" placeholder="Nombre Del Embalaje" required>
                <br><br>
                <input type="submit" value="Registrar Embalaje"><br><br>
            </fieldset>
        </form>
</body>

</html>
<?php
if($_POST)
	{
	include "conexion.php";
	
		$nombre = $_POST['nombre'];
		

		function insertar($nombre){
			$conexion = conectar();
			$sql = "INSERT INTO embalaje (nombre_emb) value ('$nombre')";
			$query = $conexion->query($sql);
			return $query;
		}
			
			if(insertar($nombre) !=null){
				echo "<h2> Registro agregado correctamente </h2>";
			}else{
				echo "<h1> No se pudo agregar el registro </h1>";
			}
	}
?>