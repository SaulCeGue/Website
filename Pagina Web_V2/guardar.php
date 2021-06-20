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
                   $nEmpleado = (int)"$_POST[idEmp]";
                   $nombre = "$_POST[nombre]";
                   $apellPat = "$_POST[apelPat]";
				           $apellMat = "$_POST[apelMat]";
                   $addres = "$_POST[direccion]";
                   $puesto = "$_POST[puesto]";
                   
                   $leer=fopen("empleados.txt","r");
                   $flag= true;
                   while(!feof($leer)){
                       $claveEmp = fgets($leer);
                       $claveNom = fgets($leer);
                       $claveApelPat = fgets($leer);
                       $claveApelMat = fgets($leer);
                       $claveAddres = fgets($leer);
                       $clavePuesto=fgets($leer);
                       if($nEmpleado==$claveEmp){
                           echo "<script> alert('Error... El dato con la clave de Empleado: ".$nEmpleado." ya existe');</script> <br> <br>";
                           $flag=false;
                       break;
                       }
                   }
                   
                   fclose($leer);
                   if($flag){
                       $guardar=fopen('empleados.txt','a+');
                       fputs($guardar,$nEmpleado."\n");
                       fputs($guardar,$nombre."\n");
                       fputs($guardar,$apellPat."\n");
                       fputs($guardar,$apellMat."\n");
                       fputs($guardar,$addres."\n");
                       fputs($guardar,$puesto."\n");
                       fclose($guardar);
                       echo "<br>";
                       echo "<br>";
                       echo "<br>";
                       echo "<br>";
                       echo "<br>";
                       echo "<div class='alert alert-success'>'Datos almacenados...'</div>";
                      
                   }
                ?>
                 <a href="agregarEmpleado.php"><button type="button" class="btn btn-success">Volver</button></a>
        </div>
    </div>
</body>
</html>