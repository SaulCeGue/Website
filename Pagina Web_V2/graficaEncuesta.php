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
    <title>Document</title>
    <link rel="shortcut icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="dist/Chart.bundle.min.js"></script>
    <script type="text/javascript">
        function grafica(){
            var arrayData = new Array();
            var archivoTxt = new XMLHttpRequest();
            var votoSi;
            var votoNo;
            var fileRuta = 'votos.txt';
            archivoTxt.open("GET",fileRuta, false);
            archivoTxt.send(null);
            var txt = archivoTxt.responseText;
            for (var i = 0; i < txt.length;i++) {
                arrayData.push(txt[i]);
            }
            for (var index = 0; index < arrayData.length; index++) {
                votoSi = arrayData[0];
                votoNo = arrayData[2];
            }
            console.log(votoSi);
            console.log(votoNo);
            $(document).ready(function(){
                var datos = {
                    type: "pie",
                    data: {
                        datasets:[{
                            data: [
                            votoSi,
                            votoNo,  
                            ],
                            backgroundColor:[
                                "#1abd0f",
                                "#ff0f47",
                            ],
                        }],
                        labels: [
                            "Si",
                            "No",
                        ]
                    }
                };
                var canvas = document.getElementById('chart').getContext('2d');
                window.pie = new Chart(canvas, datos);
            });
        }
    </script>
</head>
<body onload = "grafica()">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a class="navbar-band" href="principal.html"><img id="logo" src="imagenes/logo.png"></a></li>
                <li class="nav-item">
                <a class="nav-link" href="panelAdmin.php" id = "principal">Panel principal</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin_empleados.php" id = "adminEmp">Administrar empleados</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin_empleados.php" id = "adminEmp">Administrar usuarios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin_productos.php" id = "adminEmp">Administrar productos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin_productos.php" id = "adminEmp">Graficar encuesta</a>
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
  <br>
    <div class = "col-sm-8">
        <h1>¿El cliente está satisfecho?</h1>
    </div>
  <div id="canvas-container" style="width: 50%;">
        <canvas id="chart" width="500px" height="350px"></canvas>
    </div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>