<?php
    header('Access-Control-Allow-Origin: *');

    require_once "conexion.php";

    $con = conectar();
    $array = array();

    $sql = "SELECT * FROM noticias";
    $res = mysqli_query($con, $sql) or die(mysli_error($con));
    while($datos = mysqli_fetch_array($res)){
        $id = $datos["id"];
        $titulo = $datos["nombre"];
        $descripcion = $datos["descripcion"];
        $noticia = $datos["noticia"];
        $imagen = $datos["imagen"];
        $fecha = $datos["fecha"];
        $array[] = array(
            'id' => $id,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'noticia' => $noticia,
            'imagen' => $imagen,
            'fecha' => $fecha
        );
    }
    
    $json_string = json_encode($array, JSON_UNESCAPED_UNICODE);
    echo $json_string;