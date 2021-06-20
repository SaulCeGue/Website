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
<link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a class="navbar-band" href="principal.html"><img id="logo" src="imagenes/logo.png"></a></li>
				<li class="nav-item">
                <a class="nav-link" href="panelAdmin.php" id = "principal">Panel principal</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="agregarEmpleado.php">Agregar empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="editar.php" id = "">Modificar empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="eliminar.php" id = "">Eliminar empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="visualizar.php" id = "">Visualizar empleados</a></li>
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
	<div id="page"><div class="inner_copy"></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				<h2 class='title'>Registros</h2><br><br>	
					<?php
						$mostrar=fopen('empleados.txt','r');
						echo "<table class='table table-striped'>";
						echo "<thead>";
                        echo "<th>Id Empleado</th>";
						echo "<th>Nombre</th>";
						echo "<th>Apellido Paterno</th>";
						echo "<th>Apellido Materno</th>";
						echo "<th>Dirección</th>";
                        echo "<th>Puesto</th>";
                        echo "<th>Eliminar</th>";
						echo "</thead>";
						$mostrar=fopen('empleados.txt','r');
						while(!feof($mostrar))
						{
							$claveEmp = fgets($mostrar);
                       		$claveNom = fgets($mostrar);
                       		$claveApelPat = fgets($mostrar);
					   		$claveApelMat = fgets($mostrar);
                       		$claveAddres = fgets($mostrar);
                            $clavePuesto=fgets($mostrar);   

							if($claveNom!=""){
							echo "<tr>";
                            echo "<td>".$claveEmp."</td>";
							echo "<td>".$claveNom."</td>";
							echo "<td>".$claveApelPat."</td>";
							echo "<td>".$claveApelMat."</td>";
							echo "<td>".$claveAddres."</td>";
                            echo "<td>".$clavePuesto."</td>";
                            echo "<td>"."<a href=eliminarSelec.php?idEmp=".$claveEmp."><button type=Button class='btn btn-outline-warning'>
                            <span class='glyphicon glyphicon-remove'></span></button></a>"."</td>";
							echo "</tr>";
                            
							}
						}
					?>
					<br>
					<div style="clear:both">&nbsp;</div>
				</div>	
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
</body>
</html>