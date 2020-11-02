<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/general1.css">
    <title>insertar categoria</title>
</head>

<body>
    <?php
	include "principa.php";
	?>

        <form method="post" class="formulario" action="creacion_categoria.php">
            <h1>Categoria</h1>
            <fieldset>
                <input type="text" name="nombre" placeholder="Nombre de la Categoria" required>
                <br><br>
                <input type="submit" value="Registrar categoria"><br><br>
            </fieldset>
        </form>
</body>

</html>
<?php
if($_POST)
	{
	include "conexion.php";
	
		$nombre = $_POST['nombre'];
		

		function insertar($nom){
			$conexion = conectar();
			$sql = "insert into categoria(nombre_cat) value ('$nom')";
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