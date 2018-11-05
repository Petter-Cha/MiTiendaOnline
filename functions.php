<?php

function conexion($bd_config){
    try{
        //ESTRUCTURA PDOException
        // $variable = new PDO('mysql:host=localhost;dbname=mitienda','user','pass')
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'], $bd_config['user'], $bd_config['pass']);
        return $conexion;

    }catch (PDOException $e){
        return false;
    }
}

function iniciarSession($table, $conexion){
    $statement = $conexion->prepare("SELECT * FROM $table WHERE usuario = :usuario");
    $statement->execute([
        ':usuario'=> $_SESSION['usuario']
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);



}


//para evitar la inyeccion de codigos
function limpiarDatos($datos){
    //trim evitamos espaciados
    $datos = trim($datos);

    //detecta los signos especiales <>
    $datos = htmlspecialchars($datos);

    //borramos signos especiales <>
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);

    return $datos;
}

?>
