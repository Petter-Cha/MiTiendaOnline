<?php session_start();

require 'Admin/config.php';
require 'functions.php';

// COMPROBAR SESION
if(isset($_SESSION['usuario'])){
    // validar los datos por privilegio
$conexion = conexion($bd_config);
$usuario = iniciarSession('usuarios', $conexion);

if($usuario['rol'] == 'administrador'){
    header('Location: '.RUTA.'admin.php');

}elseif($usuario['rol'] == 'usuario'){
    header('Location: '.RUTA.'user.php');
}else{
    header('Location: '.RUTA.'empleado.php');
}
}else{
    header('Location: '.RUTA.'login.php');
}

?>
