<?php
  session_start();
  error_reporting(0);
  $varsession = $_SESSION['usuario'];

  if($varsession == null || $varsession = ''){
    echo 'No tiene autorizacion';
    dis();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar empleado</title>
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <form class="form-horizontal" action="editarRegistro.php" method="post" name = "formMod">
    <?php
    $entrada = (int)"$_REQUEST[idEmp]";
    $leer = fopen("empleados.txt","r");
    while(!feof($leer)){
        $idEmp = fgets($leer);
        $nombre = fgets($leer);
        $apelPat = fgets($leer);
        $apelMat = fgets($leer);
        $direccion = fgets($leer);
        $puesto = fgets($leer);
        if($entrada == $idEmp){
        echo "<div class='form-group'>";
        echo "<label class='control-label col-sm-2'>Clave de empleado:</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='number' class='form-control' id = 'inputs' name='idEmp' value = ".$idEmp."readonly=readonly>";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label class='control-label col-sm-2' for='inputlg'>Nombre(s):</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='text' class='form-control' id = 'inputs' name='nombre' value = ".$nombre.">";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label class='control-label col-sm-2' for='apelP'>Apellido Paterno:</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='text' class='form-control' id = 'inputs' name='apelPat' value = ".$apelPat.">";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label class='control-label col-sm-2' for='apelM'>Apellido Materno:</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='text' class='form-control'  id = 'inputs' name='apelMat' value = ".$apelMat.">";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label class='control-label col-sm-2' for='address'>Dirección:</label>";
        echo "<div class='col-sm-10'>";
        echo "<input type='text' class='form-control' id = 'inputs' name='direccion' value = ".$direccion.">";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label class = 'col-sm-1' for='puesto' id='labelPuesto'>Puesto:</label>";
        echo "<select class='form-control' id = 'inputs' name='puesto'>";
          echo "<option>".$puesto."</option>";
          echo "<option>Vendedor</option>";
          echo "<option>Administrador</option>";
          echo "<option>Acomodador</option>";
        echo "</select>";
        echo "</div>";
        }
    }
        fclose($leer);
    ?>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-1">
        <button type="submit" class="btn btn-default">Modificar</button>
      </div>
    </div>
  </form>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>