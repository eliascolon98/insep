<?php

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $servicio = $_POST['servicio'];

    require_once('conexion.php');
    $con = conectar();
    $listar = "SELECT * FROM investigaciones order by id DESC";
    $sql = mysqli_query($con, $listar) or die (mysqli_error($con));
    $data = mysqli_fetch_array($sql);


$ruta = $data["ruta"];

$email_from = $email;
$email_to = "eliascolon98@gmail.com";


$message = '<html>'.
    '<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">'.
    '<title>INSEP CONTÁCTO</title>'.
    '</head>'.
    '<body>'.
    '<div style="padding: 20px;
    border: 1px dashed;
    width: 50%;
    height: 430px;">'.
    '<img src="../images/insep investigaciones.jpg" style="width:100%;">
    <div style="display:flex;background: #f7f7f7; padding: 10px 30px;">
    <div style="width:50%">
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Nombre del cliente: '.'</b>' . $nombre . '<br></p>
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Telefono de contacto del cliente: '.'</b>' . $telefono . '<br></p>
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Email del cliente: '.'</b>' . $email . '<br></p>
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Servicio: '.'</b>' . $servicio . '<br></p>
    </div>
    <div style="width:50%">
    <a href="'.$ruta.'" target="h_blank"><img src="../images/pdf.png" style="width: 41%;
    padding-top: 20px;padding-left: 50px;"></a>
    </div>
    </div>'.
    '</div>'.

    '</body>'.
    '</html>';
	
	// create email headers
$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n".
                'Reply-To:'. $email_from . "\r\n" .
                'From:' . $email_from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $email = @mail($email_to, "FABCOM", wordwrap($message), $headers);
    if ($email) {
        echo   1;
    
    } else {
        echo $message;
    }
} else {
	echo 2;
}
?>