<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insertar cliente</title>
    <link rel="stylesheet" href="css/general1.css">
</head>

<body>
    <?php
	include "principa.php";
	?>
        <form action="registroproveedor.php" class="formulario" method="post">
			<h1>Datos del proveedor</h1>
			<br>
            <fieldset>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <br>
                <input type="text" name="direccion" placeholder="Direccion" required>
                <br>
                <input type="number" name="telefono" placeholder="numero de celular" required>
                <br>
                <input type="submit" name="insertar" value="Registrar Proveedor">
            </fieldset>

        </form>
</body>

</html>

<?php
if ($_POST) 
	{
	include "conexion.php";

	    $nom= $_POST['nombre'];
        $dirr= $_POST['direccion'];
        $tele= $_POST['telefono'];

        function insertar($nom, $dirr, $tele) {
        $conexion = conectar();
         $sql= "INSERT INTO proveedor( nombre_prov, direccion, celular) VALUES ('$nom', '$dirr', '$tele')";
         echo $sql;     $query= $conexion->query($sql);
        return $query; 
}

        if(insertar($nom, $dirr, $tele) !=null){
        	echo "<h2> Proveedro agregado correctamente </h2>";
        }else{
            echo "<h1> No se pudo agragar el registro </h1>";

        }
    }
?>