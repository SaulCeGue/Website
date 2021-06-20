
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
                <li><a class="navbar-band" href="productos.php">Productos</a></li>
                <ul class="nav navbar-nav navbar-right ml-auto">
                  <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img id="usuario" src="imagenes/usuario.png"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="iniciar_sesion.html">Iniciar sesión</a></li>
                          <li><a href="registrar_usuario.html">Registrarse</a></li>
                        </ul>
                    </li>
                    <li><a href="encuesta_satisfaccion.php">Encuesta de satisfacción</a></li>
                </ul>
                <form class="navbar-form navbar-left" action="/action_page.php">
                    <div class="input-group">
                    <input id="barra" type="text" class="form-control" placeholder="Buscar un producto">
                    <div class="input-group-btn">
                        <button id="busqueda" class="btn btn-default" type="submit">
                        <i  class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                    </div>
                </form>
      
            </ul>
          </div>
  </nav>
<div class="conteiner">
        <div class="form">
                <?php
                   $preg1 = "$_POST[q1]";
                   $preg2 = "$_POST[q2]";
                   $preg3 = "$_POST[q3]";
				           $preg4 = "$_POST[q4]";
                   $preg5 = "$_POST[q5]";
                   $preg6 = "$_POST[q6]";
                    
                       $guardar=fopen('votos.txt','a+');
                      if($preg1 == "Si"){
                        $si ++;
                      }elseif($preg1 == "No"){
                        $no++;
                      }
                      if($preg2 == "Si"){
                        $si ++;
                      }elseif($preg2 == "No"){
                        $no++;
                      }
                      if($preg3 == "Si"){
                        $si ++;
                      }elseif($preg3 == "No"){
                        $no++;
                      }
                      if($preg4 == "Si"){
                        $si ++;
                      }elseif($preg4 == "No"){
                        $no++;
                      }
                      if($preg5 == "Si"){
                        $si ++;
                      }elseif($preg5 == "No"){
                        $no++;
                      }
                      if($preg6 == "Si"){
                        $si ++;
                      }elseif($preg6 == "No"){
                        $no++;
                      }
                      fputs($guardar,$si."\n");
                      fputs($guardar,$no."\n");
                       fclose($guardar);
                       echo "<br>";
                       echo "<br>";
                       echo "<br>";
                       echo "<br>";
                       echo "<br>";
                       echo "<div class='alert alert-success'>Encuesta enviada...</div>";      
                ?>
                 <a href="principal.html"><button type="button" class="btn btn-success">Volver</button></a>
        </div>
    </div>
</body>
</html>