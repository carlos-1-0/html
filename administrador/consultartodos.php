<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/boton.css">
    <title>Consultas</title>
</head>

<body>
    <?php
	include "biblioteca.php";
	?>
        <center>
            <div class="container">
                <div class="row">
                    <h1>CONSULTA DE DATOS</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>CÓDIGO DE PRESTAMO</th>
                                <th>FECHA DE PRÉSTAMO</th>
                               
                                <th>CANTIDAD PRESTADA</th>
                                <th>FECHA DE ENTREGA</th>
                                <th>OBSERVACIÓN</th>
                                <th>CÓDIGO DE PERSONA</th>
                                <th>CÓDIGO DE LIBRO</th>

                            </tr>
                        </thead>
        </center>

        <?php
	include "conexion.php";
	
	$conexion= conectar();
		
	$sql = "SELECT * FROM prestamo";

	$result = $conexion->query($sql);

		if ($result->num_rows > 0) {
			foreach ($result as $row){
?>

            <tbody>
                <tr>
                    <td>
                        <?php echo $row["cod_prestamo"] ?> </td>
                    <td>
                        <?php echo $row["fecha_prestamo"] ?> </td>
                   
                    <td>
                        <?php echo $row["cantidad_prestada"] ?> </td>
                    <td>
                        <?php echo $row["fecha_entrega"] ?> </td>
                    <td>
                        <?php echo $row["observacion"] ?> </td>
                    <td>
                        <?php echo $row["cod_persona"] ?> </td>
                    <td>
                        <?php echo $row["codlibro"] ?> </td>

                </tr>
            </tbody>
            <?php 
		    }
		} else {
		    echo "No encuentro registros en la base de datos";
		}
		$conexion->close();
?>
            </table>
            </div>
            </div>
</body>

</html>