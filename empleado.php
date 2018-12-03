<?php session_start();


require 'Admin/config.php';
require 'functions.php';

// Comprobar sesion

if (!isset($_SESSION['usuario'])) {
    header('Location: '.RUTA.'login.php');
}
$conexion = conexion($bd_config);
$emple =iniciarSession('usuarios', $conexion);
if ($emple['rol'] == 'empleado') {
    require 'views/empleado.view.php';
} else {
    header('Location: '.RUTA.'validate.php');
}

?>