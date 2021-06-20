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
    <title>Administrar productos</title>
    <link rel="shortcut icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
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
  <h1>Administrar Productos</h1>
    <div class="col-xl-7 col-lg-12 d-flex">
    <div class="container align-self-center">
    <h2>Agregar Productos</h2>
      <br>
      <form id="form-pro">
        <div class="form-group mb-3">
            <label class="font-weight-bold">Nombre del Producto<span class="text-danger"></span></label>
            <input id="nombre" type="text" class="form-control" placeholder="Ingresa nombre del producto" autofocus>
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Precio<span class="text-danger"></span></label>
            <input id="precio" type="number" class="form-control" placeholder="Ingresa el precio">
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Descripción<span class="text-danger"></span></label>
            <input id="desc" type="text" class="form-control" placeholder="Ingresa una descripcion">
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Cantidad<span class="text-danger"></span></label>
            <input id="cantidad" type="number" class="form-control" placeholder="Ingresa la cantidad">
        </div>
        <button id="agregar" type="submit" class="btn btn-primary" >Agregar</button>
        <button id="modificar" type="submit" class="btn btn-primary" >Modificar</button>
      </form>
      <h2>Productos</h2>
      <div id="table-wrapper">
          <table class="table-users">
              <tr>
                  <th>Nombre del producto</th>
                  <th>Precio del producto</th>
                  <th>Descripcion</th>
                  <th>Cantidad del producto</th>
                  <th>Acciones</th>
              </tr>
              <tr>
              </tr>
          </table>
      </div>
    </div>
  </div>

    <!--firebase-->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
    https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.4/firebase-firestore.js"></script>

<script>
// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyD9kqbRnO_1vkh1WKT463v9egr9MPvcwXs",
    authDomain: "bdfarmamigo-c9a4d.firebaseapp.com",
    projectId: "bdfarmamigo-c9a4d",
    storageBucket: "bdfarmamigo-c9a4d.appspot.com",
    messagingSenderId: "883363539912",
    appId: "1:883363539912:web:2f2a10cb7e83055b36aefd"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const db = firebase.firestore();
</script>
<script src="adminproductos.js"></script>
</body>
</html>