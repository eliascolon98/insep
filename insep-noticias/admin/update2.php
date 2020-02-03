<?php
require_once ('conexion.php');
$con = Conect();
$id=$_REQUEST["id"];
$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$noticia=$_REQUEST["noticia"];
$foto_c =$_REQUEST["imagen_c"];

$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
copy($ruta,$destino);



if($foto != ""){
    $actualizar = "UPDATE noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino',noticia='$noticia' where id='$id '";
    $sql1=mysqli_query($con,$actualizar) or die (mysqli_error($con));
}else{
    $actualizar = "UPDATE noticias set nombre='$nombre', descripcion='$descripcion', imagen='$foto_c',noticia='$noticia' where id='$id '";
    $sql1=mysqli_query($con,$actualizar) or die (mysqli_error($con));
}

header("Location: noticias.php");


?>