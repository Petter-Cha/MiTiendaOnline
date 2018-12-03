<?php session_start();


require 'Admin/config.php';
require 'functions.php';
require 'conexion.php';
// Comprobar sesion

if (!isset($_SESSION['usuario'])) {
    header('Location: '.RUTA.'login.php');
}
$conexion = conexion($bd_config);
$admin =iniciarSession('usuarios', $conexion);
if ($admin['rol'] == 'administrador') {
    require 'views/categoriasA.view.php';
} else {
    header('Location: '.RUTA.'validate.php');
}




?>
