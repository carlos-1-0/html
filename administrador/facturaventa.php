<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/general1.css">
    <title>insertar factura</title>
</head>

<body>
    <?php
	include "principa.php";
	?>
        <form action="facturaventa.php" class="formulario" method="POST">
            <h1>Datos de la factura</h1>
            <fieldset>
                <br>
                <center> Fecha de la factura:</center>
                <input type="date" name="fechaF" required>
                <br>
                <input type="number" name="cantidad" placeholder="Cantidad" required>
                <br>
                <input type="number" name="ventas" placeholder="Total de ventas" required>
                <br>
                <input type="submit" name="boton" value="Registrar factura">
            </fieldset>
        </form>
</body>

</html>

<?php
if ($_POST) 
    {
    include "conexion.php";

        $fecha_factura= $_POST['fechaF'];
        $Cantidad= $_POST['cantidad'];
        $total_ventas= $_POST['ventas'];
       

        function insertar($fecha_factura, $Cantidad, $total_ventas) {
        $conexion = conectar();
        $sql= "INSERT INTO venta_factura (fecha_factura, cantidad, total_ventas) values ('$fecha_factura', '$Cantidad', '$total_ventas')";
        $query= $conexion->query($sql);
        return $query; 
}

        if(insertar($fecha_factura, $Cantidad, $total_ventas) !=null){
            echo "<h2> Registro agregado correctamente </h2>";
        }else{
            echo "<h1> No se pudo agragar el registro </h1>";

        }
    }
?>