
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilosRegistro.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">  
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>  
    <title>Registro</title>
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
                          <li><a href="iniciar_sesion.php">Iniciar sesión</a></li>
                          <li><a href="registrar_usuario.php">Registrarse</a></li>
                        </ul>
                    </li>
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
    <section class="contact-box mr-10">
        <div class="row no-gutters">
            <div class="col-xl-5 col-lg-12">

            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center">
                    <h1 class="font-weight-bold">Crea tu cuenta gratis</h1>
                    <p class="text-muted mb-5">Ingresa la siguiente informacion para registrarte.</p>
                    <form method="post" action="agregarUsu.php">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo<span class="text-danger">*</span></label>
                            <input name="correo" type="email" class="form-control" placeholder="Ingresa tu correo">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña<span class="text-danger">*</span></label>
                            <input name="contrasena" type="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary" name="agrega">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
