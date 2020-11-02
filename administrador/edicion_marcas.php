<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/general1.css">
    <title>Document</title>
</head>

<body>

    <?php
	include "principa.php";
	?>

        <form action="edicion_marcas.php" class="formulario" method="post">
            <h1>edicion marca</h1>
            <fieldset>

                <input type="text" name="nombre" placeholder=" nombre de la marca" required>
                <br>
                <input type="text" name="codigo" placeholder="codigo de la marca">
                <input type="submit" name="">
                <?php
                if ($_POST) {
	                include "conexion.php";

	                $conexion = conectar();

	                $nombre = $_POST["nombre"];
                    $codigo = $_POST["codigo"];
	            

		            $sql = "UPDATE marca SET  nombre_mar = '$nombre' where id_marca= $codigo ";
		            $query = $conexion -> query($sql);

	            if ($query != null) {
		            echo "<br>";
		            echo "la marca a sido actualizada.";
	            }
	                else {
		                echo "<br>";
		                echo "No se pudo actualizar la marca.";
	                }
                    }
                    ?>
            </fieldset>
</body>
</html>