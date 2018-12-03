<?php
 require "conexion.php";
 require "functions.php";
 $idCategorias = $_POST["idCategoria"];
 $nombre = $_POST["nombre"];
 $descripcion = $_POST["descripcion"];
 $opcion = $_POST["opcion"];
 $informacion = [];
if ($opcion == "modificar" || $opcion == "registrar") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
}

 switch ($opcion) {
case 'modificar':
    modificar($nombre, $descripcion, $conexion);
    break;
case 'eliminar':
    eliminar($idCategorias, $conexion);
    break;

    }

    function modificar($nombre, $descripcion, $conexion)
    {
        $query = "UPDATE categorias SET nombre='$nombre',
                                        descripcion='$descripcion'
                                WHERE idCategorias='$idCategorias'";
        $result= mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }

    function eliminar($idCategorias, $conexion)
    {
        $query = "DELETE FROM categorias WHERE idCategorias='$idCategorias'";
        $result= mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }

    function verificar_resultado($resultado)
    {
        if (!$resultado) {
            $informacion["resupuesta"]= "ERROR";
        } else {
            $informacion["resupuesta"]= "OK";
        }
        echo json_encode($informacion);
    }
    function cerrar($conexion)
    {
        mysqli_close($conexion);
    }
?>