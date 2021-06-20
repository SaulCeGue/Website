<?php
  session_start();
  error_reporting(0);
  $varsession = $_SESSION['usuario'];

  if($varsession == null || $varsession = ''){
    header("Location:iniciar_sesion.html");
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a class="navbar-band" href="principal.html"><img id="logo" src="imagenes/logo.png"></a></li>
                <li class="nav-item">
                <a class="nav-link" href="panelEmpleado.php" id = "adminProd">Panel principal</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin_prod_Emp.php" id = "adminProd">Administrar productos</a>
                </li>
                <ul class="nav navbar-nav navbar-right ml-auto">
                  <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img id="usuario" src="imagenes/usuario.png"><?php echo $_SESSION['usuario'] ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="cerrarSesion.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
          </div>
  </nav>
  <br>
  <br>
  <br>
  <h1>Bienvenido empleado</h1>
  <p>Elija una de las opciones de la barra<p>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>