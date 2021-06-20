<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="shortcut icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilosProductos.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="conexion.js"></script>
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

    <div class="conte">
      <div class="card testosterona">
        <img src="imagenes/testosterona.png" alt="">
      </div>
      <div class="informacion">
        <h1>Testosterona</h1>
        <p class="fecha">Medicamento anabólico</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$143</strike></span>
          <span class="precio2"><b>$143</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card cremas">
        <img src="imagenes/kisspng-kerstin-florian-cosmetics-skin-care-anda-inc-kerstin-florian-founder-honors-late-daughter-with-5d4b7ecf4fa205.2560763515652287513262.png" alt="">
      </div>
      <div class="informacion">
        <h1>Cremas</h1>
        <p class="fecha">Cremas varias</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$200</strike></span>
          <span class="precio2"><b>$188</b></span>
          <span class="shoping"><i class="fas fa-cart-plus"></i></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card insulina">
        <img src="imagenes/Insulina.jpg" alt="">
      </div>
      <div class="informacion">
        <h1>Insulina</h1>
        <p class="fecha">Insulina inyectable</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$500</strike></span>
          <span class="precio2"><b>$458</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card fusiderm">
        <img src="imagenes/fusiderm.png" alt="">
      </div>
      <div class="informacion">
        <h1>Fusiderm</h1>
        <p class="fecha">Crema para diabéticos</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$300</strike></span>
          <span class="precio2"><b>$290</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card bomba">
        <img src="imagenes/bomba-insulina.png" alt="">
      </div>
      <div class="informacion">
        <h1>Bomba de insulina</h1>
        <p class="fecha">Bomba para insulina</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$14000</strike></span>
          <span class="precio2"><b>$10000</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card medidor">
        <img src="imagenes/medidor-azucar.png" alt="">
      </div>
      <div class="informacion">
        <h1>Medidor de glucosa</h1>
        <p class="fecha">Medidor para monitorear glucosa en sangre</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$799.99</strike></span>
          <span class="precio2"><b>$509.80</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card reparacion">
        <img src="imagenes/cremareparacion.png" alt="">
      </div>
      <div class="informacion">
        <h1>Crema de reparación</h1>
        <p class="fecha">Crema para reparar la piel</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$243.10</strike></span>
          <span class="precio2"><b>$220.20</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card caracol">
        <img src="imagenes/locion.caracol.png" alt="">
      </div>
      <div class="informacion">
        <h1>Loción antienvejecimiento</h1>
        <p class="fecha">Loción de baba de caracol</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$500</strike></span>
          <span class="precio2"><b>$480.79</b></span>
          <span class="shoping"><i class="fas fa-cart-plus"></i></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card cicatriz">
        <img src="imagenes/quitaCicatriz.png" alt="">
      </div>
      <div class="informacion">
        <h1>Crema cicatrizadora</h1>
        <p class="fecha">Crema que ayuda a cicatrizar</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$700.43</strike></span>
          <span class="precio2"><b>$604.99</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card antiacne">
        <img src="imagenes/antiacne.png" alt="">
      </div>
      <div class="informacion">
        <h1>Kit antiacné</h1>
        <p class="fecha">Kit de cremas para evitar y desaparecer el acné</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$1500.45</strike></span>
          <span class="precio2"><b>$1200.00</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card antivejez">
        <img src="imagenes/antivejez.png" alt="">
      </div>
      <div class="informacion">
        <h1>Crema antivejez</h1>
        <p class="fecha">Crema para retrasar la edad en la piel</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$380.90</strike></span>
          <span class="precio2"><b>$270.39</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
    <div class="conte">
      <div class="card kit">
        <img src="imagenes/kitBelleza.png" alt="">
      </div>
      <div class="informacion">
        <h1>Kit de belleza</h1>
        <p class="fecha">Kit para tratamiento de la piel</p>
      </div>
      <div class="precio">
        <div class="box-precio">
          <span class="precio1"><strike>$599.99</strike></span>
          <span class="precio2"><b>$480.70</b></span>
        </div>
        <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
      </div>
    </div>
</body>
</html>