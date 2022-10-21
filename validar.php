<?php
session_start();
/**
 * Importante: la funcion session_start() debe ir primero que cualquier codigo
 */
require_once('../conexion.php');
/**************************************/
$user = $_POST["user"];
$pw = $_POST["pw"];

//print_r($_POST);
$consulta = "SELECT * FROM admin WHERE user = '$user'";
//echo $sql;
$resultado = mysqli_query($conectar,$consulta);
if (mysqli_num_rows($resultado) == 0)
{
	echo "<script text='text/javascript'>
	alert('El usuario ".$user." El usuario no esta registrado');
	window.location = 'index.php';
	</script>";
}else
{
	//preguntaremos si el login y el password coinciden la base de datos
	$consulta= "SELECT * FROM admin WHERE user = '$user' AND pw = '$pw'";
	$resultado = mysqli_query($conectar,$consulta);
	if (mysqli_num_rows($resultado) == 0)
	{
		echo "<script text='text/javascript'>
		alert('El usuario y el password no coinciden');
		window.location = 'login.php';
		</script>";
	}else
	{
	//Ahora le daremos acceso a nuestro contenido restringido
		$_SESSION["user"] = $user;
		header("Location: index.php");
	}
}

?>