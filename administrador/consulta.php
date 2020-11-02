<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Consulta</title>
</head>

<body>
    <?php
	include "principa.php";
	?>

        <center>
           
                    <h1 class="tex">inventario</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>codigo del producto</th>
                                
                                <th>nombre producto</th>
                                
                                <th>precio de venta</th>
                                <th>precio de compra</th>
                                <th>stock maximo</th>
                                <th>stock minimo</th>
                                
                            </tr>
                        
                        </thead>
                        
        </center>
        <?php
			
					include "conexion.php";
						$conexion = conectar();
						$sql = "SELECT * FROM producto";
						$result = $conexion -> query($sql);
				if ($result->num_rows > 0) {
					foreach ($result as $row) { 
						?>

            <tbody>
            
                <tr>
                    <td>
                
                       <center> <?php echo $row["id_producto"]?></center>
                       <hr>
                    </td>
                    
                    <td>
                      <center>  <?php echo $row["nombre_prod"]?></center>
                      <hr>
                    </td>
                    
                    <td>
                       <center> <?php echo $row["precio_ven"];?></center>
                       <hr>
                    </td>
                    <td>
                       <center> <?php echo $row["precio_comp"];?></center>
                       <hr>
                    </td>
                    <td>
                       <center> <?php echo $row["stock_max"];?></center>
                       <hr>
                    </td>
                    <td>
                       <center> <?php echo $row["stock_min"];?></center>
                       <hr>
                    </td>
                </tr>
            </tbody>

            </form>

			<?php
			if ($result>= '2') {
				echo "<br>";
			}
				
				}
				} else {
					echo "<br>";
					echo "0 Resultados";
			}
				$conexion -> close();
			
			?>
			</table>
</body>

</html>