<?php

include("database.php");

if(isset($_POST['agrega'])){
	$usuario = $_POST['correo'];
    $contra = $_POST['contrasena'];


    $consulta = "INSERT INTO usuarios(usuario, contra, rol) VALUES ('$usuario', '$contra', 2)";
    $resultado = mysqli_query($conn, $consulta);

	if(!$resultado){
		die("$contra");
		echo $usuario;
		echo $contra;
	}
	header("Location:registrar_usuario.php");
}

?>