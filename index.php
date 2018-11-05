<?php session_start();

require 'Admin/config.php';
require 'functions.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = limpiarDatos($_POST['usuario']);
        $password = limpiarDatos($_POST['password']);
        // $password = hash('sha512', $password);
        $rol = $_POST['rol'];

        
        $errores = '';

        //validacion de campos de texto...
        if(empty($usuario) || empty($password) || empty($rol)){
            $errores .= '<li class="error">Por favor rellene todos los campos</li>';
        }else{
            //validar que el usuario no exista en la base de datos
            $conexion = conexion($bd_config);
            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
            $statement->execute([
                ':usuario' => $usuario
            ]);
            //todos los resultados de la tabla
            $resultado = $statement->fetch();
            if($resultado != false){
                $errores .='<li class="error">Este usuario ya existe</li>';
            }
        }


        if ($errores == '') {
            $conexion = conexion($bd_config);
            $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, contrasena, rol) 
            VALUES(null, :usuario, :contrasena, :rol)');
            $statement->execute([
                ':usuario' => $usuario,
                ':contrasena' => $password,
                ':rol' => $rol
            ]);
            header('Location: '.RUTA.'login.php');
        } 
        

    }

require 'views/index.view.php';


?>