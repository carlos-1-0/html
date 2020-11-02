<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Insertar cliente</title>
	<link rel="stylesheet" href="css/general1.css">
</head>
<body>
<?php
	include "principa.php";
	?>
	<form action="registro_cliente.php" class="formulario" method="post">
		<h1> Datos del Cliente </h1>
		<fieldset>
			
			<input type="text" name="nombre" placeholder=" Nombre y Apellido" required><br><br>
			<input type="text" name="direccion" placeholder="Direccion" required><br><br>
			<input type="number" name="telefono" placeholder="numero telefonico" required><br><br>
			<input type="submit" name="insertar" value="Registrar Cliente">
		</fieldset>
	
	</form>
</body>
</html>

<?php
if ($_POST) 
	{
	include "conexion.php";

	    $nombre= $_POST['nombre'];
        $direccion= $_POST['direccion'];
        $telefono= $_POST['telefono'];

        function insertar($nom, $dirr, $tele) {
        $conexion = conectar();
         $sql= "INSERT INTO cliente( nombre_cliente, direccion, telefono) VALUES ('$nom', '$dirr', '$tele')";
        $query= $conexion->query($sql);
        return $query; 
}

        if(insertar($nombre, $direccion, $telefono) !=null){
        	echo "<h2> Registro agregado correctamente </h2>";
        }else{
            echo "<h1> No se pudo agragar el registro </h1>";

        }
    }
?>