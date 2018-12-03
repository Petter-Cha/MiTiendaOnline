<?php
	$server = "localhost";
	$user = "root";
	$password = "Ichliebedich";
	$bd = "mitienda";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}	
?>

