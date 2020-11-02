
<?php
session_start();
//si hay una sesión
if (isset($_SESSION['nombre'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina de inicio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Barra navegacion</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">proyecto programación software</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['nombre']."   "."Rol:".$_SESSION['rol'];?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="cerrar_sesion.php">Salir</a></li>
              </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
      
<article style="text-align: center;">
    <h1>¡Bienvenido <?php print $_SESSION['nombre'];?>!</h1>
    <h4>Esta es la pagina web del administrador.</h4>
</article>
    
    <script src="js/jquery.min.js"></script>s
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}//si no hay sesión
else{
   
   header ('location: ./');
  
}
?>