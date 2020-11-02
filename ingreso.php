<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/sesion1.css">
    <title>Iniciar Sesion</title>
</head>

<body>
    <form action="ingreso.php" class="ingreso" method="post">
        <input type="Email" name="correonamei" class="correo" placeholder="Correo Electronico" required>
        <br>
        <input type="password" name="clavenamei" class="contraseña" placeholder="Contraseña" required>
        <br>
        <button type="submit" name="entrar">Entrar</button>
    </form>
</body>

</html>
<?php
 
	if(isset($_POST["entrar"])) {
 
		 include "conexion.php";
	// invoco la funcion de conectar
	    $conexion= conectar();
 
			$loginCorreo = $_POST["correonamei"];
			$loginPassword = $_POST["clavenamei"];
 
			$consulta = "SELECT * FROM roles WHERE correo_persona='$loginCorreo' AND clave='$loginPassword'";

 
			if($resultado = $conexion->query($consulta)) {
				foreach ($resultado as $row) 
				{
 					$usuario=$row["nom_persona"];
					$BaseCorreo = $row["correo_persona"];
					$BaseClave = $row["clave"];
					$rol=$row["rol"];
				}
				$resultado->close();
			}
			$conexion->close();
 
 
			if(isset($loginCorreo) && isset($loginPassword)) {
 
				if($loginCorreo == $BaseCorreo && $loginPassword == $BaseClave) {
 					if ($rol == "Administrador") {
 						session_start();
					    $_SESSION["nombre"] = $usuario;
					    $_SESSION["rol"]=$rol;
					    header("Location:administrador/principa.php");	
 						}	

 						if ($rol == "empleado") {
 						session_start();
					    $_SESSION["nombre"] = $usuario;
					    $_SESSION["rol"]=$rol;
					    header("Location:empleado/principa.php");	
						 }
						 if ($rol == "bodeguero") {
							session_start();
						   $_SESSION["nombre"] = $usuario;
						   $_SESSION["rol"]=$rol;
						   header("Location:bodeguero/principa.php");	
							}
				}
				else {
					Header("ingrese valores validos");	
				}
 
			}
 
		} else {
			header("ingrese valores validos");
		}
 
 ?>