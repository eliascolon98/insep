<?php

function Conect()
{
    # code...

    $echo = mysqli_connect("localhost", "biinyuga_modulo", "biinyuga_modulo", "biinyuga_modulo_noticias");

    return $echo;
}

?>
