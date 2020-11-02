<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registro1.css">
    <title>Registro</title>
</head>

<body>
    <form action="registroo2.php" class="registro" method="post">
        <input type="text" name="nombrenamer" placeholder="Nombre Completo" required>
        <br>
        <input type="email" name="correonamer" placeholder="correo electronico" required>
        <br>
        <input type="tel" name="celularnamer" placeholder="numero celular" required>
        <br>
        <input type="password" name="clavenamer" placeholder="Contraseña" required>
        <br>
        <center><label>Rol (seleccione uno:):</label></center>

        <select name="rolnamer">
              <option><h1>ROL</h1></option>
                <option>Administrador</option>
                <option>empleado</option>
                <option>bodeguero</option>
               
              </select>
        <br><br><br>
        </div>
        <button type="submit" name="registrar">Registrar</button>
    </form>


</body>

</html>
<?php

//si se han enviado datos
if(isset($_POST['registrar'])){
   $nombre= $_POST["nombrenamer"];
		$correo= $_POST["correonamer"];
		$celular= $_POST["celularnamer"];
		$clave= $_POST["clavenamer"];
		$rol= $_POST["rolnamer"];

      include "conexion.php";
	// invoco la funcion de conectar
	    $conexion= conectar();

		$sql = "INSERT INTO roles(nom_persona,correo_persona,celular_persona,clave,rol) value ('$nombre','$correo','$celular','$clave','$rol')";
		
			$query = $conexion->query($sql);

			if($query!=null){ // inserta javascript
      echo '<script language="javascript">alert("Ha sido registrado exitosamente")</script>';
          if ($rol=="Administrador") {
            Header("location:administrador/principa.php");
          }
          if ($rol=="empleado") {
            Header("location:empleado/principa.php");
          }
          if ($rol=="bodeguero") {
            Header("location:bodeguero/principa.php");
          }
			}
}else{
  header("ingrese valores validos");
    
} 
?>