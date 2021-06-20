<?php
    session_start();
    $usuario = $_POST['email2'];
    $contra = $_POST['contra2'];

    $_SESSION['usuario'] = $usuario;
    

    //Conexion
    $conexion = mysqli_connect("localhost", "root", "", "bdfarmamigo");
    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contra='$contra'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);
    if($filas>0){
        header("Location:panelAdmin.php");
    }
    else{
        echo "Correo y/o contraseña incorrectos";
    }
?>