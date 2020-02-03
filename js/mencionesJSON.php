<?php
    header('Access-Control-Allow-Origin: *');

    require_once "conexion.php";

    $con = conectar();
    $array = array();

    $sql = "SELECT * FROM menciones";
    $res = mysqli_query($con, $sql) or die(mysli_error($con));
    while($datos = mysqli_fetch_array($res)){
        $titulo = $datos["nombre"];
        $descripcion = $datos["descripcion"];
        $imagen = $datos["imagen"];
        $array[] = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'imagen' => $imagen
        );
    }
    
    $json_string = json_encode($array, JSON_UNESCAPED_UNICODE);
    echo $json_string;