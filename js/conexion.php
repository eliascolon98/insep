<?php
function conectar(){
    $con = mysqli_connect("localhost", "biinyuga_modulo", "biinyuga_modulo", "biinyuga_modulo_noticias");
    return $con;
}
