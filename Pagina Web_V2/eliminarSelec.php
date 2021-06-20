<?php
  session_start();
  error_reporting(0);
  $varsession = $_SESSION['usuario'];

  if($varsession == null || $varsession = ''){
    echo 'No tiene autorizacion';
    dis();
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Archivos secuenciales</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="imagenes/favicon.png">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a class="navbar-band" href="principal.html"><img id="logo" src="imagenes/logo.png"></a></li>
                <li class="nav-item"><a class="nav-link" href="agregarEmpleado.php">Agregar empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="editar.php">Modificar empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="eliminar.php">Eliminar empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="visualizar.php">Visualizar empleados</a></li>
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
<div class="conteiner">
        <div class="form">
                <?php
                   $entrada = (int)"$_REQUEST[idEmp]";
                   $leer = fopen("empleados.txt","r");
                   $escribir=fopen("temp.txt","a+");
                   $baja = fopen("eliminados.txt","a+");
                   while(!feof($leer)){
                       $idEmps = fgets($leer);
                       $nombreEmp = fgets($leer);
                       $apelPat = fgets($leer);
                       $apelMat = fgets($leer);
                       $direccion = fgets($leer);
                       $puestoEmp = fgets($leer);
                       if($entrada != $idEmps){
                        fputs($escribir,$idEmps);
                        fputs($escribir,$nombreEmp);
                        fputs($escribir,$apelPat);
                        fputs($escribir,$apelMat);
                        fputs($escribir,$direccion);
                        fputs($escribir,$puestoEmp);
                       }
                       if($entrada == $idEmps){
                        fputs($baja,$idEmps);
                        fputs($baja,$nombreEmp);
                        fputs($baja,$apelPat);
                        fputs($baja,$apelMat);
                        fputs($baja,$direccion);
                        fputs($baja,$puestoEmp);
                       }
                   }
                   fclose($leer);
                   fclose($escribir);
                   fclose($baja);
                   if(rename("temp.txt","empleados.txt")){
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "Registro eliminado correctamente...<br>";
                    }
                ?>
                <br>
                <div style="clear:both">&nbsp;</div>
        </div>
    </div>
</body>
</html>