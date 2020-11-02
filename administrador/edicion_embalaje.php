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

        <form action="edicion_embalaje.php" class="formulario" method="post">
            <h1>edicion marca</h1>
            <fieldset>

                <input type="text" name="nombre" placeholder=" nombre del embalaje" required>
                <br>
                <input type="text" name="codigo" placeholder="codigo del embalaje">
                <input type="submit" name="">
                <?php
                if ($_POST) {
	                include "conexion.php";

	                $conexion = conectar();

	                $nombre = $_POST["nombre"];
                    $codigo = $_POST["codigo"];
	            

		            $sql = "UPDATE embalaje SET  nombre_emb = '$nombre' where id_embalaje= $codigo ";
		            $query = $conexion -> query($sql);

	            if ($query != null) {
		            echo "<br>";
		            echo "el embalaje a sido actualizada.";
	            }
	                else {
		                echo "<br>";
		                echo "No se pudo actualizar el embalaje.";
	                }
                    }
                    ?>
            </fieldset>
</body>
</html>