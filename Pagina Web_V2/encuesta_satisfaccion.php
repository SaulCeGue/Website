<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de satisfacción</title>
    <link rel="shortcut icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            display: block;
            justify-content: center;
            align-items: center;
        }
    </style>
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
    <br>
    <br>
    <br>
    <br>
    <div class = "container">
        <h1>Responda esta pequeña encuesta para mejorar nuestro servicio</h1>
        <form action="guardarVoto.php" method="post">
            <div>
            <label class="font-weight-bold">¿Está satisfecho(a) con el estilo de la página?<span class="text-danger"></span></label>
            </div>
            <label class="checkbox-inline"><input type="radio" name="q1" value="Si">Si</label>
            <label class="checkbox-inline"><input type="radio" name="q1" value="No">No</label>
            <br>
            <br>
            <div>
            <label class="font-weight-bold">¿Está satisfecho(a) con los servicios que ofrece?<span class="text-danger"></span></label>
            </div>
            <label class="checkbox-inline"><input type="radio" name="q2" value="Si">Si</label>
            <label class="checkbox-inline"><input type="radio" name="q2" value="No">No</label>
            <br>
            <br>
            <div>
            <label class="font-weight-bold">¿Considera que hay variedad en los productos que ofrece?<span class="text-danger"></span></label>
            </div>
            <label class="checkbox-inline"><input type="radio" name="q3" value="Si">Si</label>
            <label class="checkbox-inline"><input type="radio" name="q3" value="No">No</label>
            <br>
            <br>
            <div>
            <label class="font-weight-bold">¿Considera que la calidad de los productos es buena?<span class="text-danger"></span></label>
            </div>
            <label class="checkbox-inline"><input type="radio" name="q4" value="Si">Si</label>
            <label class="checkbox-inline"><input type="radio" name="q4" value="No">No</label>
            <br>
            <br>
            <div>
            <label class="font-weight-bold">¿Considera el tiempo de respuesta de la página óptima?<span class="text-danger"></span></label>
            </div>
            <label class="checkbox-inline"><input type="radio" name="q5" value="Si">Si</label>
            <label class="checkbox-inline"><input type="radio" name="q5" value="No">No</label>
            <br>
            <br>
            <div>
            <label class="font-weight-bold">¿Recomendaría la página con amigos?<span class="text-danger"></span></label>
            </div>
            <label class="checkbox-inline"><input type="radio" name="q6" value="Si">Si</label>
            <label class="checkbox-inline"><input type="radio" name="q6" value="No">No</label>
            <br>
            <br> 
            <div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
    </div>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>