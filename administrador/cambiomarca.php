<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cambio Marca</title>
    <link rel="stylesheet" href="css/marca.css">

</head>

<body>
    <form action="cambiomarca.php" method="post">
        <form>
            <h1>CAMBIO MARCA</h1>

            Id Marca: <br>
            <input type="number" name="id" required="">
            <br><br> Nombre La Marca:<br>
            <input type="text" name="marca" required>
            <br><br>
            <input type="submit" value="Cambiar Marca">
        </form>

    </form>
</body>

</html>

<?php
if($_POST){
	include"conexion.php";
	$conexion = conectar();

	$id = $_POST ['id'];
	$marca= $_POST['marca'];
	

	$sql = "UPDATE marca
			SET nombre_mar = '$marca'
			WHERE id_marca = '$id'";
	
		$query = $conexion-> query($sql);

		if ($query !=null){
			echo "<h2>Cambio marca correctamente</h2>";
		}else{
			echo "<h1>No se pudo cambiar marca/h1>";
		}

}



?>