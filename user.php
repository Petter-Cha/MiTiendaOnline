<?php session_start();


require 'Admin/config.php';
require 'functions.php';

// Comprobar sesion

if (!isset($_SESSION['usuario'])) {
    header('Location: '.RUTA.'login.php');
}
$conexion = conexion($bd_config);
$user =iniciarSession('usuarios', $conexion);
if ($user['rol'] == 'usuario') {
    require 'views/user.view.php';
} else {
    header('Location: '.RUTA.'validate.php');
}

?>