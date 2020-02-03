<?php
require_once('conexion.php');
$con = conectar();
$email = $_POST['email_hv'];
$nombre = $_POST['nombre_hv'];

$nombre_ar = $_FILES['archivo_hv']['name'];
$tipo = $_FILES['archivo_hv']['type'];
$tamanio = $_FILES['archivo_hv']['size'];
$rutas = $_FILES['archivo_hv']['tmp_name'];
$nombre_archivo = str_replace(" ","-",$nombre_ar);
$destino_arc="archivos/".$nombre_archivo; 
copy($rutas,'../'.$destino_arc);


$save = "INSERT into hoja_devida (nombre, email, archivo) values ('$nombre', '$email', '$destino_arc')";
$sql = mysqli_query($con, $save) or die (mysqli_error($con));



    
if (isset($_POST['email_hv'])) {

$email = $_POST['email_hv'];
$nombre = $_POST['nombre_hv'];

$email_from = $email;
$email_to = "Jefehseq@insep.com.co";


$message = '<html>'.
    '<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
    <meta name="viewport" content="width=device-width, initial-scale=1">'.
    '<title>INSEP CONTÁCTO</title>'.
    '</head>'.
    '<body>'.
    '<div class="container">'.
    '<img src="http://insep.com.co/images/ORGANIZACION INSEP HORIZONTAL.jpg" class="img-logo">
    <div class="row">
    <div  class="col-datos">
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Nombre: '.'</b>' . $nombre . '<br></p>
    <p style="border: 1px solid; padding: 5px; background: #d72e340d;">'.
    '<b>'.'Email: '.'</b>' . $email . '<br></p>
    </div>
    <div style="width:50%">
    <h4 style="text-align:center;">HOJA DE VIDA</h4>
    <a href="http://insep.com.co/'.$destino_arc.'" target="h_blank"><img src="http://insep.com.co/images/pdf.png" class="img-pdf" ></a>
    </div>
    </div>'.
    '</div>
    </div>
    <style>
    .img-logo{
        width:100%;
    }
    .row{
        display:flex;
        background: #f7f7f7; 
        padding: 10px 30px;
    }
    .container{
        padding: 20px;
        border: 1px dashed;
        width: 50%;
        height: 430px;
    }
    .col-datos{
        width:50%
    }
    .img-pdf{
        width: 41%;
        padding-top: 20px; 
        padding-left: 85px;
    }
    @media (max-width: 414px){
        .img-logo{
            width:80%;
        }
        .row{
            display:block;
        }
        .container{
            width: 90%;
        }
        .col-datos{
            width:100%
        }
        .img-pdf{
            width: 80%;
        }
    }
    </style>'.
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
        echo '<script>
            alert("Hoja de vida enviada con éxito");
            window.history.back();
        </script>';
    
    } else {
        echo '<script>
            alert("Error al enviar Hoja de vida");
            window.history.back();
        </script>';
    }
} else {
	echo 2;
}
?>