<?php 
      function conectar(){
         $con = mysqli_connect("localhost", "root", "", "almacen");
		
		if ($con->connect_error) {
    		return die("La conexión falló: " . $con->connect_error);
		}
		return $con;
		} 
 ?>