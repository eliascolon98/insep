<?php
require_once ('conexion.php');
$con = Conect();

$nombre = $_POST["titulo"];
$descripcion = $_POST["des"];
$foto_c = $_POST["imagen_c"];

$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
@$destino="fotos/".$nombre_foto;
copy($ruta,$destino);

if($foto != ""){
    $actualizar = "UPDATE menciones set nombre='$nombre', descripcion='$descripcion', imagen='$destino '";
    $sql1=mysqli_query($con,$actualizar) or die (mysqli_error($con));
}else{
    $actualizar = "UPDATE menciones set nombre='$nombre', descripcion='$descripcion', imagen='$foto_c'";
    $sql1=mysqli_query($con,$actualizar) or die (mysqli_error($con));
}

header("Location: actualizarMencion.php");


?>